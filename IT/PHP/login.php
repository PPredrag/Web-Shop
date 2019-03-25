<?php

	require "db.php";
	UserLogin::login();
	
	if(!UserLogin::login())
	{
		echo "Prvo se registrujte!!";
	}
?>