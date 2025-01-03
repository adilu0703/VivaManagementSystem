<?php 

//connecting

  include_once 'connection.php';
$conn = OpenCon();

  
    

//datbase

  echo  $sql="delete from sregister where gp={$_GET['id']}";
   
    $result = $conn -> query($sql) or die("delete query execution failed"); //execute query
    
 header("Location:index.php");

        

    mysqli_close($conn);


 ?>