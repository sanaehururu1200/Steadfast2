<?php

namespace raklib\protocol;

use raklib\RakLib;

class CloseSessionPacket extends \Threaded {

	public static $id = RakLib::PACKET_CLOSE_SESSION;
	public $identifier;
	public $reason;

	public function __construct($identifier, $reason = '') {
		$this->identifier = $identifier;
		$this->reason = $reason;
	}

}
