<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style> 

.link{
    position: absolute;
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 19px;
    right: 20px;
    top: 135px;

}

    </style>
</head>
<body>

</body>
</html>

<?php
include 'header.php';
?>
<div id="main-content">
    <h2></h2>

    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' <div class="header"> WELCOME SUPERVISOR</div>';
        echo '<a class= "link" href="svvlogout.php?logout"> Logout </a>';
    }
    else
    {
        header("location:svlogin.php");
    }

?>

<?php

//connecting
include_once 'connection.php';

$conn = OpenCon();

//datbase

  $user=$_SESSION['User'];
  $sql="select * from sregister where gpname = '$user' ";
   
    $result = $conn -> query($sql) or die(" query execution failed"); 

    if( mysqli_num_rows($result) > 0 )
    {
?>

    
    <table cellpadding="7px" >
        <thead>
        <th>Id</th>
        <th>S1 Name</th>
        <th>s1 Roll No</th>
        <th>S1 Gender</th>
        <th>S1 DOB </th>
        <th>S1 Email </th>
         <th>S2 Name</th>
        <th>S2 Roll No</th>
        <th>S2 Gender</th>
        <th>S2 DOB </th>
        <th> S2 Email </th>
        <th> City </th>
        <th> Campus </th>
        <th> Gp Name </th>
        <th> Password </th>
        <th> Marks obtained </th>
        <th> Action</th>
        </thead>
        <tbody>


  <?php
               $i=0;
                while( $row = mysqli_fetch_assoc($result) )
                {

   ?>

            <tr>

                <td>  <?php echo ++$i  ?>    </td>
                <!-- <td>  <?php // echo $row['sid'];  ?>    </td> -->
                <td> <?php  echo $row['sname1'];  ?>   </td>
                <td> <?php  echo $row['roll1'];  ?>   </td>
                <td> <?php  echo $row['gender1'];  ?>   </td>
                <td> <?php  echo $row['dob1'];  ?>   </td>
                <td> <?php  echo $row['email1'];  ?>   </td>

                <td> <?php  echo $row['sname2'];  ?>   </td>
                <td> <?php  echo $row['roll2'];  ?>   </td>
                <td> <?php  echo $row['gender2'];  ?>   </td>
                <td> <?php  echo $row['dob2'];  ?>   </td>
                <td> <?php  echo $row['email2'];  ?>   </td>

                <td> <?php  echo $row['city'];  ?>   </td>
                <td> <?php  echo $row['campus'];  ?>   </td>
                <td> <?php  echo $row['gpname'];  ?>   </td>
                <td> <?php  echo $row['pwd'];  ?>   </td>
                 <td> <?php  echo $row['marks'];   ?>   </td>
                
                <td>
                    <a href='svvedit.php?id=<?php  echo $row['gp'];  ?> '>Edit</a>
                    <br>
                    <a href='delete.php?id=<?php  echo $row['gp'];  ?> '>Delete</a>
                </td>
            </tr>
            
  <?php 
            }          //closing bracket of while( $row = mysqli_fetch_assoc($result) )
    ?>

        </tbody>
    </table>

<?php
}           //bracket of if( mysqli_num_rows($result) > 0 )
else
{
    echo "<h2>no records found<h2>";
}

mysqli_close($conn);
?>

</div>
</div>
</body>
</html>
