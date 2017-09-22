<?php

namespace raklib\protocol;

use raklib\RakLib;

class OpenSessionPacket extends \Threaded {

	public static $id = RakLib::PACKET_OPEN_SESSION;
	public $identifier;
	public $address;
	public $port;
	public $clientId;

	public function __construct($identifier, $address, $port, $clientId) {
		$this->identifier = $identifier;
		$this->address = $address;
		$this->port = $port;
		$this->clientId = $clientId;
	}

}
