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
  top: 80px;
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


<div class="header"> REGISTER STUDENT - VIVA MANAGEMENT SYSTEM </div>

<div class="container">

<form onsubmit="return validation()" onsubmit="return validation2()"  action="studentregistrationdatabase.php" method="post">

  <table style="margin-left: auto; margin-right: auto;" cellpadding="7px; ">
   <tr>
    <td><h2>STUDENT 1 :<h2></td>
    </tr>
    <tr>
    <td> Name :</td>
    <td><input type="text" name="sname1" required></td>
   </tr>
   <tr>
    <td>Roll-no:</td>
    <td><input type="text" name="roll1" required></td>
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
    <td><input type="Date" name="dob1" required></td>
   </tr> 
   <tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email1" required></td>
   </tr> 
    



<tr>
    <td><h2>STUDENT 2 :</h2></td>
  </tr>
<tr>
    <td> Name :</td>
    <td><input type="text" name="sname2" required></td>
   </tr>
   <tr>
    <td>Roll-no:</td>
    <td><input type="text" name="roll2" required></td>
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
    <td><input type="Date" name="dob2" required></td>
   </tr> 
   <tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email2" required></td>
   </tr> 


<tr>
<td><h2>FOR BOTH STUDENTS :</h2></td>
</tr>

    <td>City (institute city):</td>
    <td><input type="text" name="city" required> </td>
   </tr>

   <tr>
    <td>Select FAST University Campus for Viva :</td>
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
   <td> Group-Name :</td>
    <td><input type="text" name="gpname" required></td>
   </tr>
   <td> Password :</td>
    <td><input type="Password" name="pwd" required></td>
   </tr>
   <td> Marks Obtained :</td>
    <td><input type="hidden" name="marks" ></td>
   </tr>

   

   <tr>
    <td><input id="b1" type="Submit" value="Submit"></td>
   </tr>
    
  </table>
 </form>
</div>

<button onClick="parent.location='slogin.php'" class="button button1">back to LOGIN page</button>

</body>
</html>
