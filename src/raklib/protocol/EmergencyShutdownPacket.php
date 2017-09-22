<?php

namespace raklib\protocol;

use raklib\RakLib;

class EmergencyShutdownPacket extends \Threaded {

	public static $id = RakLib::PACKET_EMERGENCY_SHUTDOWN;

}
