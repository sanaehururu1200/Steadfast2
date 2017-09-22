<?php

namespace raklib\protocol;

use raklib\RakLib;

class SetOptionPacket extends \Threaded {

	public static $id = RakLib::PACKET_SET_OPTION;
	public $name;
	public $value;

	public function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	}

}
