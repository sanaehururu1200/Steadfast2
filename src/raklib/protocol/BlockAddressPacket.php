<?php

namespace raklib\protocol;

use raklib\RakLib;

class BlockAddressPacket extends \Threaded {

	public static $id = RakLib::PACKET_BLOCK_ADDRESS;
	public $address;
	public $timeout;

	public function __construct($address, $timeout) {
		$this->address = $address;
		$this->timeout = $timeout;
	}

}
