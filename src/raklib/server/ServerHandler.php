<?php

/*
 * RakLib network library
 *
 *
 * This project is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 */

namespace raklib\server;

use raklib\Binary;
use raklib\protocol\EncapsulatedPacket;
use raklib\RakLib;
use raklib\protocol\RawPacket;
use raklib\protocol\CloseSessionPacket;
use raklib\protocol\SetOptionPacket;
use raklib\protocol\BlockAddressPacket;
use raklib\protocol\ShutdownPacket;
use raklib\protocol\EmergencyShutdownPacket;
use raklib\protocol\InvalidSessionPacket;

class ServerHandler{

    /** @var RakLibServer */
    protected $server;
    /** @var ServerInstance */
    protected $instance;

    public function __construct(RakLibServer $server, ServerInstance $instance){
        $this->server = $server;
        $this->instance = $instance;
    }

    public function sendEncapsulated(EncapsulatedPacket $packet){
        $this->server->pushMainToThreadPacket($packet);
    }

    public function sendRaw($address, $port, $payload){
        $this->server->pushMainToThreadPacket(new RawPacket($address, $port, $payload));
    }

    public function closeSession($identifier, $reason){
        $this->server->pushMainToThreadPacket(new CloseSessionPacket($identifier, $reason));
    }

    public function sendOption($name, $value){
        $this->server->pushMainToThreadPacket(new SetOptionPacket($name, $value));
    }

    public function blockAddress($address, $timeout){
        $this->server->pushMainToThreadPacket(new BlockAddressPacket($address, $timeout));
    }

    public function shutdown(){
        $this->server->pushMainToThreadPacket(new ShutdownPacket());
        $this->server->shutdown();
        $this->server->synchronized(function(){
			if (!is_null($this->server)) {
				$this->server->wait(20000);
			}
        });
        $this->server->join();
    }

    public function emergencyShutdown(){
	    $this->server->shutdown();
        $this->server->pushMainToThreadPacket(new EmergencyShutdownPacket());
    }

    protected function invalidSession($identifier){
        $this->server->pushMainToThreadPacket(new InvalidSessionPacket($identifier));
    }

    /**
     * @return bool
     */
    public function handlePacket(){
        if(!is_null($packet = $this->server->readThreadToMainPacket())){
			switch ($packet::$id) {
				case RakLib::PACKET_ENCAPSULATED:
					$this->instance->handleEncapsulated($packet->identifier, $packet->buffer);
					break;
				case RakLib::PACKET_PING:
					$this->instance->handlePing($packet->identifier, $packet->ping);
					break;
				case RakLib::PACKET_RAW:
					 $this->instance->handleRaw($packet->address, $packet->port, $packet->payload);
					break;
				case RakLib::PACKET_SET_OPTION:
					 $this->instance->handleOption($packet->name, $packet->value);
					break;
				case RakLib::PACKET_OPEN_SESSION:
					$this->instance->openSession($packet->identifier, $packet->address, $packet->port, $packet->clientID);
					break;
				case RakLib::PACKET_CLOSE_SESSION:
					 $this->instance->closeSession($packet->identifier, $packet->reason);
					break;
				case RakLib::PACKET_INVALID_SESSION:
					 $this->instance->closeSession($packet->identifier, "Invalid session");
					break;
			}
            return true;
        }
        return false;
    }
}