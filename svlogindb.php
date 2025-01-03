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
            $query="select * from tregister where username='".$_POST['UName']."' and pwd='".$_POST['Password']."' and supervisingGp='".$_POST['sname']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['sname'];
                header("location:svvindex.php");
            }
            else
            {
                header("location:svlogin.php?Invalid= INVALID USERNAME, PASSWORD OR GROUPNAME ");
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