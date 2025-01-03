<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
  <link rel="stylesheet" type="text/css" href="studentregisteration.css">

  <style>
body{
  color: yellow;
  background-color: gold;
}

    #menu{
    background-color: #333;
}
#menu ul{
    font-size: 0;
    padding: 0 10px;
    margin: 0;
    list-style: none;
}
#menu ul li{
    display: inline-block;
}
#menu ul li a{
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 8px 10px;
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

#menu ul li a:hover{
    background-color: rgba(255,255,255,0.2);
}
#b1:hover
{
  background-color: lightgreen;
}




  </style>
</head>
<body style="color: gold;">



<div id="main-content">
    <h2><div class="header" style="color:green;"> UPDATE RECORD- VIVA MANAGEMENT SYSTEM </div></h2>

    <div id="menu">
            <ul>
                <li>
                    <a href="svindex.php";>Home</a>
                </li>
                
                
            </ul>
        </div>

<?php
                
       //connecting
 include_once 'connection.php';
$conn = OpenCon();

  
//datbase

    $stu_id = $_GET['id'];

    $sql="select * from tregister where id=$stu_id";
   
    $result = $conn -> query($sql) or die(" <h1> edit query execution failed <h1>"); //execute query

     if( mysqli_num_rows($result) > 0 )
    {
    	 while( $row = mysqli_fetch_assoc($result) )
                {
?>



    <form class="post-form" action="svupdate.php" method="post">
      
<table style="margin-left: auto; margin-right: auto;" cellpadding="7px; ">

  <tr><td> <input type="hidden" name="id" value="<?php  echo $row['id'];  ?> "/></td></tr>

    <td> Name :</td>
    <td><input type="text" name="name" value="<?php  echo $row['name'];  ?> "></td>
    <
   </tr>  
   
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email" value="<?php  echo $row['email'];  ?> "></td>
   </tr> 

   <tr>
    <td>Select FAST University Campus to conduct Viva :</td>
    <td>
     <select style="border-radius: 5px; border: 2px solid green; padding: 4px;" name="campus" value="<?php  echo $row['campus'];  ?> ">
      <option selected hidden value="">Select Campus</option>
  
      <option value="fsd">FAST FSD</option>
      <option value="isb">FAST ISB</option>
      <option value="lhr">FAST LHR</option>
      <option value="kchi">FAST KCHI</option>
      <option value="pesh">FAST PESHWR</option>
     </select>
    </td>
   </tr> 
    
<tr>
   <td> User Name :</td>
    <td><input type="text" name="uname" value="<?php  echo $row['username'];  ?> "></td>
   </tr>
   <tr>
   <td> Password :</td>
    <td><input type="Password" name="pwd" value="<?php  echo $row['pwd'];  ?> "></td>
   </tr>

  <tr>
   <td> Supervising Gp :</td>
    <td><input type="text" name="sname" value="<?php  echo $row['sname'];  ?> "></td>
   </tr>
   <tr>


   

   <tr>
    <td><input style="position: absolute; left: 47%; padding: 10px; font-weight: bold; font-size: 15px;" id="b1" type="Submit" value="update"></td>
   </tr>
    
    <tr></tr> <tr></tr>
    <tr></tr><tr></tr>
    <tr></tr><tr></tr>
    <tr></tr>
    <tr></tr><tr></tr>
    <tr></tr><tr></tr>
    <tr></tr>
  </table>

    </form>

    

<?php }} ?>
</div>
</div>
</body>
</html>
