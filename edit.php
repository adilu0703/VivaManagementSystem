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
                    <a href="index.php";>Home</a>
                </li>
                
                
            </ul>
        </div>

<?php
                
       //connecting
 include_once 'connection.php';
$conn = OpenCon();

  
//datbase

    $stu_id = $_GET['id'];

    $sql="select * from sregister where gp=$stu_id";
   
    $result = $conn -> query($sql) or die(" <h1> edit query execution failed <h1>"); //execute query

     if( mysqli_num_rows($result) > 0 )
    {
    	 while( $row = mysqli_fetch_assoc($result) )
                {
?>



    <form class="post-form" action="update.php" method="post">
      
<table style="margin-left: auto; margin-right: auto;" cellpadding="7px; ">
  <tr><td> <input type="hidden" name="gp" value="<?php  echo $row['gp'];  ?> "/></td></tr>
   <tr>
    <td><h2>STUDENT 1 :<h2></td>
    </tr>
    <tr>
     
    <td> Name :</td>
    <td><input type="text" name="sname1" value="<?php  echo $row['sname1'];  ?> "></td>
    <
   </tr>
   <tr>
    <td>Roll-no:</td>
    <td><input type="text" name="roll1" value="<?php  echo $row['roll1'];  ?> "></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender1" value="m" required>Male
     <input type="radio" name="gender1" value="f" required>Female
     <input type="radio" name="gender1" value="o" required>Other
    </td>
   </tr>
    <tr>
    <td>VIVA Date :</td>
    <td><input type="Date" name="dob1" value="<?php  echo $row['dob1'];  ?> "></td>
   </tr> 
   <tr>
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email1" value="<?php  echo $row['email1'];  ?> "></td>
   </tr> 
    



<tr>
    <td><h2>STUDENT 2 :</h2></td>
  </tr>
<tr>
     
    <td> Name :</td>
    <td><input type="text" name="sname2" value="<?php  echo $row['sname2'];  ?> "></td>
    <
   </tr>
   <tr>
    <td>Roll-no:</td>
    <td><input type="text" name="roll2" value="<?php  echo $row['roll2'];  ?> "></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender2" value="m" required>Male
     <input type="radio" name="gender2" value="f" required>Female
     <input type="radio" name="gender2" value="o" required>Other
    </td>
   </tr>
    <tr>
    <td>VIVA Date :</td>
    <td><input type="Date" name="dob2" value="<?php  echo $row['dob2'];  ?> "></td>
   </tr> 
   <tr>
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email2" value="<?php  echo $row['email2'];  ?> "></td>
   </tr> 

<tr>
<td><h2>FOR BOTH STUDENTS :</h2></td>
</tr>

    <td>City (institute city):</td>
    <td><input type="text" name="city" value="<?php  echo $row['roll2'];  ?> "> </td>
   </tr>

   <tr>
    <td>Select FAST University Campus for Viva :</td>
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
   <td> Group-Name :</td>
    <td><input type="text" name="gpname" value="<?php  echo $row['gpname'];  ?> "></td>
   </tr>
   <td> Password :</td>
    <td><input type="Password" name="pwd" value="<?php  echo $row['pwd'];  ?> "></td>
   </tr>
   <td> Marks Obtained :</td>
    <td><input type="hidden" name="marks" value="null"></td>
   </tr>

   

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
