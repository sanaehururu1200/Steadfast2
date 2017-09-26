<?php

namespace pocketmine\network\multiversion;

abstract class MultiversionEnums {

	private static $playerActionType = [
		'default' => [
			-1 => 'UNKNOWN',
			0 => 'START_DESTROY_BLOCK',
			1 => 'ABORT_DESTROY_BLOCK',
			2 => 'STOP_DESTROY_BLOCK',
			3 => 'GET_UPDATED_BLOCK',
			4 => 'DROP_ITEM',
			5 => 'RELEASE_USE_ITEM',
			6 => 'STOP_SLEEPENG',
			7 => 'RESPAWN',
			8 => 'START_JUMP',
			9 => 'START_SPRINTING',
			10 => 'STOP_STRINTING',
			11 => 'START_SNEAKING',
			12 => 'STOP_SNEAKING',
			13 => 'CHANGE_DEMENSION',
			14 => 'CHANGE_DEMENSION_ACK',
			15 => 'START_GLIDING',
			16 => 'STOP_GLIDING',
			17 => 'DENY_DESTROY_BLOCK',
			18 => 'CRACK_BLOCK',
		],
		'120' => [
			-1 => 'UNKNOWN',
			0 => 'START_DESTROY_BLOCK',
			1 => 'ABORT_DESTROY_BLOCK',
			2 => 'STOP_DESTROY_BLOCK',
			3 => 'GET_UPDATED_BLOCK',
			4 => 'DROP_ITEM',
			5 => 'START_SLEEPING',
			6 => 'STOP_SLEEPING',
			7 => 'RESPAWN',
			8 => 'START_JUMP',
			9 => 'START_SPRINTING',
			10 => 'STOP_STRINTING',
			11 => 'START_SNEAKING',
			12 => 'STOP_SNEAKING',
			13 => 'CHANGE_DEMENSION',
			14 => 'CHANGE_DEMENSION_ACK',
			15 => 'START_GLIDING',
			16 => 'STOP_GLIDING',
			17 => 'DENY_DESTROY_BLOCK',
			18 => 'CRACK_BLOCK',
			19 => 'CHANGE_SKIN',
		],
	];
	
	private static $textPacketType = [
		'default' => [
			0 => 'TYPE_RAW',
			1 => 'TYPE_CHAT',
			2 => 'TYPE_TRANSLATION',
			3 => 'TYPE_POPUP',
			4 => 'TYPE_TIP',
			5 => 'TYPE_SYSTEM',
			6 => 'TYPE_WHISPER',
			7 => 'TYPE_ANNOUNCEMENT',
		],
		'120' => [
			0 => 'TYPE_RAW',
			1 => 'TYPE_CHAT',
			2 => 'TYPE_TRANSLATION',
			3 => 'TYPE_POPUP',
			4 => 'JUKEBOX_POPUP',
			5 => 'TYPE_TIP',
			6 => 'TYPE_SYSTEM',
			7 => 'TYPE_WHISPER',
			8 => 'TYPE_ANNOUNCEMENT',
		],
	];
	
	private static $levelSoundEvent = [
		'default' => [
			0 => 'SOUND_USE_ITEM_ON',
			1 => 'SOUND_HIT',
			2 => 'SOUND_STEP',
			3 => 'SOUND_JUMP',
			4 => 'SOUND_BREAK',
			5 => 'SOUND_PLACE',
			6 => 'SOUND_HEAVY_STEP',
			7 => 'SOUND_GALLOP',
			8 => 'SOUND_FALL',
			9 => 'SOUND_AMBIENT',
			10 => 'SOUND_AMBIENT_BABY',
			11 => 'SOUND_AMBIENT_IN_WATER',
			12 => 'SOUND_BREATHE',
			13 => 'SOUND_DEATH',
			14 => 'SOUND_DEATH_IN_WATER',
			15 => 'SOUND_DEATH_TO_ZOMBIE',
			16 => 'SOUND_HURT',
			17 => 'SOUND_HURT_IN_WATER',
			18 => 'SOUND_MAD',
			19 => 'SOUND_BOOST',
			20 => 'SOUND_BOW',
			21 => 'SOUND_SQUISH_BIG',
			22 => 'SOUND_SQUISH_SMALL',
			23 => 'SOUND_FALL_BIG',
			24 => 'SOUND_FALL_SMALL',
			25 => 'SOUND_SPLASH',
			26 => 'SOUND_FIZZ',
			27 => 'SOUND_FLAP',
			28 => 'SOUND_SWIM',
			29 => 'SOUND_DRINK',
			30 => 'SOUND_EAT',
			31 => 'SOUND_TAKE_OFF',
			32 => 'SOUND_SHAKE',
			33 => 'SOUND_PLOP',
			34 => 'SOUND_LAND',
			35 => 'SOUND_SADDLE',
			36 => 'SOUND_ARMOR',
			37 => 'SOUND_ADD_CHEST',
			38 => 'SOUND_THROW',
			39 => 'SOUND_ATTACK',
			40 => 'SOUND_ATTACK_NO_DAMAGE',
			41 => 'SOUND_WARN',
			42 => 'SOUND_SHEAR',
			43 => 'SOUND_MILK',
			44 => 'SOUND_THUNDER',
			45 => 'SOUND_EXPLODE',
			46 => 'SOUND_FIRE',
			47 => 'SOUND_IGNITE',
			48 => 'SOUND_FUSE',
			49 => 'SOUND_STARE',
			50 => 'SOUND_SPAWN',
			51 => 'SOUND_SHOOT',
			52 => 'SOUND_BREAK_BLOCK',
			53 => 'SOUND_REMEDY',
			54 => 'SOUND_UNFECT',
			55 => 'SOUND_LEVEL_UP',
			56 => 'SOUND_BOW_HIT',
			57 => 'SOUND_BULLET_HIT',
			58 => 'SOUND_EXTINGUISH_FIRE',
			59 => 'SOUND_ITEM_FIZZ',
			60 => 'SOUND_CHEST_OPEN',
			61 => 'SOUND_CHEST_CLOSED',
			62 => 'SOUND_SHULKER_BOX_OPEN',
			63 => 'SOUND_SHULKERBOXCLOSED',
			64 => 'SOUND_POWER_ON',
			65 => 'SOUND_POWER_OFF',
			66 => 'SOUND_ATTACH',
			67 => 'SOUND_DETACH',
			68 => 'SOUND_DENY',
			69 => 'SOUND_TRIPOD',
			70 => 'SOUND_POP',
			71 => 'SOUND_DROP_SLOT',
			72 => 'SOUND_NOTE',
			73 => 'SOUND_THORNS',
			74 => 'SOUND_PISTON_IN',
			75 => 'SOUND_PISTON_OUT',
			76 => 'SOUND_PORTAL',
			77 => 'SOUND_WATER',
			78 => 'SOUND_LAVA_POP',
			79 => 'SOUND_LAVA',
			80 => 'SOUND_BURP',
			81 => 'SOUND_BUCKET_FILL_WATER',
			82 => 'SOUND_BUCKET_FILL_LAVA',
			83 => 'SOUND_BUCKET_EMPTY_WATER',
			84 => 'SOUND_BUCKET_EMPTY_LAVA',
			85 => 'SOUND_GUARDIAN_FLOP',
			86 => 'SOUND_GUARDIAN_CURSE',
			87 => 'SOUND_MOB_WARNING',
			88 => 'SOUND_MOB_WARNING_BABY',
			89 => 'SOUND_TELEPORT',
			90 => 'SOUND_SHULKER_OPEN',
			91 => 'SOUND_SHULKER_CLOSE',
			92 => 'SOUND_HAGGLE',
			93 => 'SOUND_HAGGLE_YES',
			94 => 'SOUND_HAGGLE_NO',
			95 => 'SOUND_HAGGLE_IDLE',
			96 => 'SOUND_CHORUS_GROW',
			97 => 'SOUND_CHORUS_DEATH',
			98 => 'SOUND_GLASS',
			99 => 'SOUND_CAST_SPELL',
			100 => 'SOUND_PREPARE_ATTACK_SPELL',
			101 => 'SOUND_PREPARE_SUMMON',
			102 => 'SOUND_PREPARE_WOLOLO',
			103 => 'SOUND_FANG',
			104 => 'SOUND_CHARGE',
			105 => 'SOUND_TAKE_PICTURE',
			106 => 'SOUND_DEFAULT',
			107 => 'SOUND_UNDEFINED',
		],
		'120' => [
			0 => 'SOUND_USE_ITEM_ON',
			1 => 'SOUND_HIT',
			2 => 'SOUND_STEP',
			3 => 'SOUND_FLY',
			4 => 'SOUND_JUMP',
			5 => 'SOUND_BREAK',
			6 => 'SOUND_PLACE',
			7 => 'SOUND_HEAVY_STEP',
			8 => 'SOUND_GALLOP',
			9 => 'SOUND_FALL',
			10 => 'SOUND_AMBIENT',
			11 => 'SOUND_AMBIENT_BABY',
			12 => 'SOUND_AMBIENT_IN_WATER',
			13 => 'SOUND_BREATHE',
			14 => 'SOUND_DEATH',
			15 => 'SOUND_DEATH_IN_WATER',
			16 => 'SOUND_DEATH_TO_ZOMBIE',
			17 => 'SOUND_HURT',
			18 => 'SOUND_HURT_IN_WATER',
			19 => 'SOUND_MAD',
			20 => 'SOUND_BOOST',
			21 => 'SOUND_BOW',
			22 => 'SOUND_SQUISH_BIG',
			23 => 'SOUND_SQUISH_SMALL',
			24 => 'SOUND_FALL_BIG',
			25 => 'SOUND_FALL_SMALL',
			26 => 'SOUND_SPLASH',
			27 => 'SOUND_FIZZ',
			28 => 'SOUND_FLAP',
			29 => 'SOUND_SWIM',
			30 => 'SOUND_DRINK',
			31 => 'SOUND_EAT',
			32 => 'SOUND_TAKE_OFF',
			33 => 'SOUND_SHAKE',
			34 => 'SOUND_PLOP',
			35 => 'SOUND_LAND',
			36 => 'SOUND_SADDLE',
			37 => 'SOUND_ARMOR',
			38 => 'SOUND_ADD_CHEST',
			39 => 'SOUND_THROW',
			40 => 'SOUND_ATTACK',
			41 => 'SOUND_ATTACK_NO_DAMAGE',
			42 => 'SOUND_WARN',
			43 => 'SOUND_SHEAR',
			44 => 'SOUND_MILK',
			45 => 'SOUND_THUNDER',
			46 => 'SOUND_EXPLODE',
			47 => 'SOUND_FIRE',
			48 => 'SOUND_IGNITE',
			49 => 'SOUND_FUSE',
			50 => 'SOUND_STARE',
			51 => 'SOUND_SPAWN',
			52 => 'SOUND_SHOOT',
			53 => 'SOUND_BREAK_BLOCK',
			54 => 'SOUND_LAUNCH',
			55 => 'SOUND_BLAST',
			56 => 'SOUND_LARGE_BLAST',
			57 => 'SOUND_TWINKLE',
			58 => 'SOUND_REMEDY',
			59 => 'SOUND_UNFECT',
			60 => 'SOUND_LEVEL_UP',
			61 => 'SOUND_BOW_HIT',
			62 => 'SOUND_BULLET_HIT',
			63 => 'SOUND_EXTINGUISH_FIRE',
			64 => 'SOUND_ITEM_FIZZ',
			65 => 'SOUND_CHEST_OPEN',
			66 => 'SOUND_CHEST_CLOSED',
			67 => 'SOUND_SHULKER_BOX_OPEN',
			68 => 'SOUND_SHULKERBOXCLOSED',
			69 => 'SOUND_POWER_ON',
			70 => 'SOUND_POWER_OFF',
			71 => 'SOUND_ATTACH',
			72 => 'SOUND_DETACH',
			73 => 'SOUND_DENY',
			74 => 'SOUND_TRIPOD',
			75 => 'SOUND_POP',
			76 => 'SOUND_DROP_SLOT',
			77 => 'SOUND_NOTE',
			78 => 'SOUND_THORNS',
			79 => 'SOUND_PISTON_IN',
			80 => 'SOUND_PISTON_OUT',
			81 => 'SOUND_PORTAL',
			82 => 'SOUND_WATER',
			83 => 'SOUND_LAVA_POP',
			84 => 'SOUND_LAVA',
			85 => 'SOUND_BURP',
			86 => 'SOUND_BUCKET_FILL_WATER',
			87 => 'SOUND_BUCKET_FILL_LAVA',
			88 => 'SOUND_BUCKET_EMPTY_WATER',
			89 => 'SOUND_BUCKET_EMPTY_LAVA',
			90 => 'SOUND_RECORD_13',
			91 => 'SOUND_RECORD_CAT',
			92 => 'SOUND_RECORD_BLOCKS',
			93 => 'SOUND_RECORD_CHIRP',
			94 => 'SOUND_RECORD_FAR',
			95 => 'SOUND_RECORD_MALL',
			96 => 'SOUND_RECORD_MELLOHI',
			97 => 'SOUND_RECORD_STAL',
			98 => 'SOUND_RECORD_STRAD',
			99 => 'SOUND_RECORD_WARD',
			100 => 'SOUND_RECORD_11',
			101 => 'SOUND_RECORD_WAIT',
			102 => 'SOUND_RECORD_NULL',
			103 => 'SOUND_GUARDIAN_FLOP',
			104 => 'SOUND_GUARDIAN_CURSE',
			105 => 'SOUND_MOB_WARNING',
			106 => 'SOUND_MOB_WARNING_BABY',
			107 => 'SOUND_TELEPORT',
			108 => 'SOUND_SHULKER_OPEN',
			109 => 'SOUND_SHULKER_CLOSE',
			110 => 'SOUND_HAGGLE',
			111 => 'SOUND_HAGGLE_YES',
			112 => 'SOUND_HAGGLE_NO',
			113 => 'SOUND_HAGGLE_IDLE',
			114 => 'SOUND_CHORUS_GROW',
			115 => 'SOUND_CHORUS_DEATH',
			116 => 'SOUND_GLASS',
			117 => 'SOUND_CAST_SPELL',
			118 => 'SOUND_PREPARE_ATTACK_SPELL',
			119 => 'SOUND_PREPARE_SUMMON',
			120 => 'SOUND_PREPARE_WOLOLO',
			121 => 'SOUND_FANG',
			122 => 'SOUND_CHARGE',
			123 => 'SOUND_TAKE_PICTURE',
			124 => 'SOUND_PLACELEASHKNOT',
			125 => 'SOUND_BREAK_LEASH_KNOT',
			126 => 'SOUND_AMBIENT_GROWL',
			127 => 'SOUND_AMBIENT_WHINE',
			128 => 'SOUND_AMBIENT_PANT',
			129 => 'SOUND_AMBIENT_PURR',
			130 => 'SOUND_AMBIENT_PURREOW',
			131 => 'SOUND_DEATH_MIN_VOLUME',
			132 => 'SOUND_DEATH_MID_VOLUME',
			133 => 'SOUND_IMITATE_BLAZE',
			134 => 'SOUND_IMITATE_CAVE_SPIDER',
			135 => 'SOUND_IMITATE_CREEPER',
			136 => 'SOUND_IMITATE_ELDER_GUARDIAN',
			137 => 'SOUND_IMITATE_ENDER_DRAGON',
			138 => 'SOUND_IMITATE_ENDERMAN',
			139 => 'SOUND_IMITATE_ENDERMITE',
			140 => 'SOUND_IMITATE_EVOCATIONILLAGER',
			141 => 'SOUND_IMITATE_GHAST',
			142 => 'SOUND_IMITATE_HUSK',
			143 => 'SOUND_IMITATE_ILLUSIONILLAGER',
			144 => 'SOUND_IMITATE_MAGMA_CUBE',
			145 => 'SOUND_IMITATE_POLAR_BEAR',
			146 => 'SOUND_IMITATE_SHULKER',
			147 => 'SOUND_IMITATE_SILVER_FISH',
			148 => 'SOUND_IMITATE_SKELETON',
			149 => 'SOUND_IMITATE_SLIME',
			150 => 'SOUND_IMITATE_SPIDER',
			151 => 'SOUND_IMITATE_STRAY',
			152 => 'SOUND_IMITATE_VEX',
			153 => 'SOUND_IMITATE_VINDICATIONILLAGER',
			154 => 'SOUND_IMITATE_WITCH',
			155 => 'SOUND_IMITATE_WITHER',
			156 => 'SOUND_IMITATE_WITHER_SKELETON',
			157 => 'SOUND_IMITATE_WOLF',
			158 => 'SOUND_IMITATE_ZOMBIE',
			159 => 'SOUND_IMITATE_ZOMBIE_PIGMAN',
			160 => 'SOUND_IMITATE_ZOMBIE_VILLAGER',
			161 => 'SOUND_ENDER_EYE_PLACED',
			162 => 'SOUND_END_PORTAL_CREATED',
			163 => 'SOUND_DEFAULT',
			164 => 'SOUND_UNDEFINED',
		],
	];
	
	public static function getPlayerAction($playerProtocol, $actionId) {
		if (!isset(self::$playerActionType[$playerProtocol])) {
			$playerProtocol = 'default';
		}
		if (!isset(self::$playerActionType[$playerProtocol][$actionId])) {
			return self::$playerActionType[$playerProtocol][-1];
		}
		return self::$playerActionType[$playerProtocol][$actionId];
	}
	
	public static function getPlayerActionId($playerProtocol, $actionName) {
		if (!isset(self::$playerActionType[$playerProtocol])) {
			$playerProtocol = "default";
		}
		foreach (self::$playerActionType[$playerProtocol] as $key => $value) {
			if ($value == $actionName) {
				return $key;
			}
		}
		return -1;
	}
	
	public static function getMessageType($playerProtocol, $typeId) {
		if (!isset(self::$textPacketType[$playerProtocol])) {
			$playerProtocol = 'default';
		}
		if (!isset(self::$textPacketType[$playerProtocol][$typeId])) {
			return self::$textPacketType[$playerProtocol][0];
		}
		return self::$textPacketType[$playerProtocol][$typeId];
	}
	
	public static function getMessageTypeId($playerProtocol, $typeName) {
		if (!isset(self::$textPacketType[$playerProtocol])) {
			$playerProtocol = "default";
		}
		foreach (self::$textPacketType[$playerProtocol] as $key => $value) {
			if ($value == $typeName) {
				return $key;
			}
		}
		return 0;
	}
	
	public static function getLevelSoundEventName($playerProtocol, $eventId) {
		if (!isset(self::$levelSoundEvent[$playerProtocol])) {
			$playerProtocol = 'default';
		}
		if (!isset(self::$levelSoundEvent[$playerProtocol][$eventId])) {
			return end(self::$levelSoundEvent);
		}
		return self::$levelSoundEvent[$playerProtocol][$eventId];
	}
	
	public static function getLevelSoundEventId($playerProtocol, $eventName) {
		if (!isset(self::$levelSoundEvent[$playerProtocol])) {
			$playerProtocol = 'default';
		}
		foreach (self::$levelSoundEvent[$playerProtocol] as $key => $value) {
			if ($value == $eventName) {
				return $key;
			}
		}
		return count(self::$levelSoundEvent[$playerProtocol]) - 1;
	}
	
}
