<?php
	
	namespace Tgniter;

	class Config
	{
		static $values;

		public static function get($value) {
			if ($value == 'all') {
				return self::$values;
			}
			else {
				if (array_key_exists($value, self::$values))
					return self::$values[$value];
				else
					return false;
			}
		}

		public static function set($values) {
			self::$values = $values;
		}
	}