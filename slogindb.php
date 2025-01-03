<?php 
include_once 'connection.php';

$conn = OpenCon();

session_start();
    if(isset($_POST['Login']))
    {
       /*if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:slogin.php");
       }
       else*/
       {
            $query="select * from sregister where gpname='".$_POST['UName']."' and pwd='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php");
            }
            else
            {
                header("location:slogin.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

CloseCon ($conn);
echo "connection closed successfully <br>";
?>