<?php
	
	
	class UserLogin
	{
		public static $email;
		public static $password;
		public static $provera;
		
		
		
		public static function login()
		{
			if(trim($_POST['email'] != "") && trim($_POST['password']) != "")
			{
				self::$email = $_POST['email'];
				self::$password = $_POST['password'];
			
			
			$dbEmail = Connect::getInstance()->query("SELECT * FROM users WHERE mail = '" .  self::$email . "'");
	
			while($red = mysqli_fetch_object($dbEmail))
			{
				$_SESSION["id"] = $red->user_id;
				header("Location:UploadProfilePicture.php");
			}
			}
			else
			{
				echo "Prvo se registrujte!!!";
			}

		}
		public static function returnEmail()
		{
			return self::$email;
		}
	
		
		
		
		
	}
	

	
	
	
		
		


?>




