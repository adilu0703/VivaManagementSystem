<?php 

//connecting

  include_once 'connection.php';
$conn = OpenCon();

  
    

//datbase

  echo  $sql="delete from tregister where id={$_GET['id']}";
   
    $result = $conn -> query($sql) or die("delete query execution failed"); //execute query
    
 header("Location: svindex.php");

        

    mysqli_close($conn);


 ?>