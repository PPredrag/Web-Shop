<?php
	session_start();
	define("DB_HOST",                     "localhost");
	define("DB_USER",                     "root");
	define("DB_PASSWORD",                 "");
	define("DB_DATABASE",                 "reg_users");
	
	
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
	
		
		/*AUTOLOADER*/
		spl_autoload_register(function($className){
				require_once "classes/{$className}.class.php";
			});

			
	
			
?>
