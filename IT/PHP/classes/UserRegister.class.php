<?php
	class UserRegister
	{
		private static $name;
		
		private static $email;
		
		private static $password;
		
		public static function register()
		{
			if(trim($_POST['name']) != "" && trim($_POST['email']) != "" && trim($_POST['password']) != "")
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['password'];
				
				self::$name = $name;
				self::$email = $email;
				self::$password = $pass;
				
				$provera = Connect::getInstance()->query("SELECT mail FROM users WHERE mail = '". self::$email ."'");
					if(mysqli_num_rows($provera) > 0)
					{
						echo "Vec postoji ovaj mail";
						exit();
					}
					else
					{	
						$q = Connect::getInstance()->query("INSERT INTO users(name, mail, password) VALUES ('" . self::$name . "', '" . self::$email . "', '" . Self::$password . "')");
						echo "Uspesna registracija";
						
						header("Location:index.php");
						
					}	
			}
		}
	

	}
?>