<?php

include_once 'connection.php';
$conn = OpenCon();


 $sql = "insert into tregister (name, email, campus, username, pwd, SupervisingGp )
values ('$_POST[name]', '$_POST[email]', '$_POST[campus]', '$_POST[uname]', '$_POST[pwd]','$_POST[sname]'  ) ";



$result = $conn -> query($sql);   //execute query


$y = $conn -> query("select * from tregister"); 

if ($y)
{
 echo "table exists <br>";
}
 else
{
echo "table does not exists <br>".$conn->error;
}

if($result)
{
	echo "data inserted successfully <br>"; 
}else
{
	echo "data insertion failed: ".$conn->error;
	echo "<br>";
}

header("Location: svlogin.php");
echo "SIGNUP SUCCESSFULY <br>"; 

CloseCon ($conn);
echo "connection closed successfully <br>";



?>
