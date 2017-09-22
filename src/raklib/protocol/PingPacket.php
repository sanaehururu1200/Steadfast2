<?php

namespace raklib\protocol;

use raklib\RakLib;

class PingPacket extends \Threaded {

	public static $id = RakLib::PACKET_PING;
	public $identifier;
	public $ping;

	public function __construct($identifier, $ping) {
		$this->identifier = $identifier;
		$this->ping = $ping;
	}

}
