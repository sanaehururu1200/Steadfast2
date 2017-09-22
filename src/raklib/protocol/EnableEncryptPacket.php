<?php

namespace raklib\protocol;

use raklib\RakLib;

class EnableEncryptPacket extends \Threaded {

	public static $id = RakLib::PACKET_ENABLE_ENCRYPT;
	public $token;
	public $privateKey;
	public $publicKey;
	public $identifier;

	public function __construct($identifier, $token, $privateKey, $publicKey) {
		$this->identifier = $identifier;
		$this->token = $token;
		$this->privateKey = $privateKey;
		$this->publicKey = $publicKey;
	}

}
