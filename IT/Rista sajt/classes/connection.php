<?php

	class connection{
	
		private static $conn;
		
		private function __construct(){
			self::$conn=new PDO('mysql:host=localhost;dbname=door_link', 'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			}
			
		public static function getInstance(){
			if(!self::$conn)
			new connection();
			return self::$conn;
			}   
		}
?>