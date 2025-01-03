<?php

function OpenCon() {
	$servername = "localhost";
	$user = "root";
	$pass = "";
	$db = "webproject";

	$conn = new mysqli ($servername,$user,$pass,$db);

	//verify connection 
	if ($conn->connect_error){
		die("Connection failed".$conn->connect_error);
		echo "<br>";
	}
	else
    {
    	echo "<br>";
    }
	
	return $conn;
	
}

function CloseCon($conn){
	$conn->close();
}


?>