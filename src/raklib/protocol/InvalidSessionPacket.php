<?php

namespace raklib\protocol;

use raklib\RakLib;

class InvalidSessionPacket extends \Threaded {

	public static $id = RakLib::PACKET_INVALID_SESSION;
	public $identifier;

	public function __construct($identifier) {
		$this->identifier = $identifier;
	}

}
