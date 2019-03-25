
<?php

class Connect
	{
		private static $_instance = null;
		public $conn;
		private function __construct()
		{
			
		}
		public static function getInstance()
		{
			if(is_null(self::$_instance))
			{
				self::$_instance = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
			}
			return self::$_instance;
		}
	}
	
	
	?>