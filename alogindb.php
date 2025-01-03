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
            $query="select * from admin where username='".$_POST['UName']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:amain.html");
            }
            else
            {
                header("location:alogin.php?Invalid= Please Enter Correct User Name and Password ");
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