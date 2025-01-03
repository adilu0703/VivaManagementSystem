<?php

  include_once 'connection.php';
$conn = OpenCon();

 $id = $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $campus = $_POST['campus'];
 $uname = $_POST['uname'];

 $pwd = $_POST['pwd'];
 $sname = $_POST['sname'];
  

//datbase

    echo $sql="update tregister set name='{$name}',email='{$email}',campus='{$campus}',username='{$uname}',pwd='{$pwd}',SupervisingGp='{$sname}' where id={$id} ";
   
    $result = $conn -> query($sql) or die(" <h1>update query execution failed <h1>"); //execute query

    header("Location: svindex.php");

    mysqli_close($conn);





  ?>