<?php

  include_once 'connection.php';
$conn = OpenCon();

 $gp_id = $_POST['gp'];
 $name1 = $_POST['sname1'];
 $roll1 = $_POST['roll1'];
 $gender1 = $_POST['gender1'];
 $dob1 = $_POST['dob1'];
 $email1 = $_POST['email1'];

 $name2 = $_POST['sname2'];
 $roll2 = $_POST['roll2'];
 $gender2 = $_POST['gender2'];
 $dob2 = $_POST['dob2'];
 $email2 = $_POST['email2'];

  $city = $_POST['city'];
 $camp = $_POST['campus'];
 $gpname = $_POST['gpname'];
 $pass = $_POST['pwd'];
 $marks = $_POST['marks'];




  

//datbase

    echo $sql="update sregister set sname1='{$name1}',roll1='{$roll1}',gender1='{$gender1}',dob1='{$dob1}',email1='{$email1}',sname2='{$name2}',roll2='{$roll2}',gender2='{$gender2}',dob2='{$dob2}',email2='{$email2}',city='{$city}',campus='{$camp}',gpname='{$gpname}',pwd='{$pass}',marks='{$marks}'           where gp={$gp_id} ";
   
    $result = $conn -> query($sql) or die(" <h1>update query execution failed <h1>"); //execute query

    header("Location: index.php");

    mysqli_close($conn);





  ?>