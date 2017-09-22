<?php

namespace raklib\protocol;

use raklib\RakLib;

class RawPacket extends \Threaded {

	public static $id = RakLib::PACKET_RAW;
	public $address;
	public $port;
	public $payload;

	public function __construct($address, $port, $payload) {
		$this->address = $address;
		$this->port = $port;
		$this->payload = $payload;
	}

}
