<?php 
include_once 'connection.php';

$conn = OpenCon();

session_start();
    if(isset($_POST['Login']))
    {
      /* if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:svlogin.php");
       }
       else*/
       {
            $query="select * from sregister where gpname='".$_POST['gpname']."' ";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:svvindex.php");
            }
            else
            {
                header("location:svgp.php?Invalid= Please Enter Valid Group Name");
            }
       }
    }  
    /*else
    {
        echo 'Not Working Now Guys';
    }*/

CloseCon ($conn);
echo "connection closed successfully <br>";
?>