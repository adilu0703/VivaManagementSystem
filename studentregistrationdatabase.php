<?php

include_once 'connection.php';
$conn = OpenCon();

/*echo " $_POST[fn], $_POST[ln], $_POST[gender], $_POST[dob], $_POST[addr], $_POST[email], $_POST[clg], $_POST[matric], $_POST[fsc], $_POST[campus], $_POST[smstr], $_POST[cgpa]";
echo "<br>";*/

 $sql = "insert into sregister (sname1, roll1, gender1, dob1, email1,sname2, roll2, gender2, dob2, email2, city, campus, gpname, pwd )
values ('$_POST[sname1]', '$_POST[roll1]', '$_POST[gender1]', '$_POST[dob1]', '$_POST[email1]', '$_POST[sname2]', '$_POST[roll2]', '$_POST[gender2]', '$_POST[dob2]', '$_POST[email2]', '$_POST[city]', '$_POST[campus]', '$_POST[gpname]', '$_POST[pwd]'  ) ";



$result = $conn -> query($sql);   //execute query


$y = $conn -> query("select * from sregister"); 

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

header("Location: slogin.php");
echo "SIGNUP SUCCESSFULY <br>"; 

CloseCon ($conn);
echo "connection closed successfully <br>";



?>
