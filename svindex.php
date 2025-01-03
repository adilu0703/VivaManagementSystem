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
include 'aheader.php';
?>
<div id="main-content">
    <h2></h2>

    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' <div class="header"> WELCOME ' .$_SESSION['User']. '</div>';
        echo '<a class= "link" href="svlogout.php?logout"> Logout </a>';
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

  $sql="select * from tregister";
   
    $result = $conn -> query($sql) or die(" query execution failed"); 

    if( mysqli_num_rows($result) > 0 )
    {
?>

    
    <table cellpadding="7px" >
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Campus</th>
        <th>User name </th>
        <th>Password</th>
         <th>Supervising Gp</th>
        <th>Action</th>
        
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
                <td> <?php  echo $row['name'];  ?>   </td>
                <td> <?php  echo $row['email'];  ?>   </td>
                <td> <?php  echo $row['campus'];  ?>   </td>
                <td> <?php  echo $row['username'];  ?>   </td>
                <td> <?php  echo $row['pwd'];  ?>   </td>
                <td> <?php  echo $row['SupervisingGp'];  ?>   </td>

                
                
                <td>
                    <a href='svedit.php?id=<?php  echo $row['id'];  ?> '>Edit</a>
                    <br>
                    <a href='svdelete.php?id=<?php  echo $row['id'];  ?> '>Delete</a>
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
