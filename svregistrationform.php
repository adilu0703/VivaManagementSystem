<!DOCTYPE html >
<html>
<head>

<script type="text/javascript" src="studentregistrationjs.js" type="text/javascript"></script>

<title>ADIL NADEEM 18F-0316_5D</title>
<link rel="stylesheet" type="text/css" href="studentregisteration.css">

<style>
  
  .button {
  position: absolute;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  top: 460px;
  right: 90px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>

<body style="background-color: gold;">


<div class="header"> REGISTER SUPERVISOR - VIVA MANAGEMENT SYSTEM </div>

<div class="container">

<form onsubmit="return validation()" onsubmit="return validation2()"  action="svregistrationdatabase.php" method="post">

  <table style="margin-left: auto; margin-right: auto;" cellpadding="7px; ">
   
    <tr>
    <td> Name :</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr>

   <tr>
    <td>Select FAST University Campus to conduct Viva :</td>
    <td>
     <select style="border-radius: 5px; border: 2px solid green; padding: 4px;" name="campus" required>
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
   <td> User Name:</td>
    <td><input type="text" name="uname" required></td>
   </tr>
   <tr>
   <td> Password :</td>
    <td><input type="Password" name="pwd" required></td>
   </tr>
   <tr>
   <td> Supervising group:</td>
    <td><input type="text" name="sname" ></td>
   </tr>
   

   <tr>
    <td><input id="b1" type="Submit" value="Submit"></td>
   </tr>
    
  </table>
 </form>
</div>

<button onClick="parent.location='svlogin.php'" class="button button1">back to LOGIN page</button>

</body>
</html>
