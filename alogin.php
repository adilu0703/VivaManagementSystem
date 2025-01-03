<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Student Login Form </title>
    <link rel="stylesheet" type="text/css" href="logintemp.css">
    <link rel="stylesheet" type="text/css" href="studentregisteration.css">

    <style>
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
 .button2 {
  position: relative ;
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
  top: 0px;
  left: 0px;
  
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
    </style>
</head>
<body style="color: red ; text-align: center; font-style: bold;" >

        <div class="header" style="color: white;"> ADMIN PANEL - VIVA MANAGEMENT SYSTEM </div>
<!-- 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 -->

                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header"> ADMIN Log in</h2>

                         <form class="login-container" action="alogindb.php"  method="post">

                            <input type="text" name="UName" placeholder=" User Name" required >
                            <input type="password" name="Password" placeholder=" Password" required>
                            <br>
                           <!--  <input id="b1" type="submit" value="Login"> -->
                                <button  class="button2 button1" name="Login" >Login</button>

                             

                           
                        </form>
                     </div>
<button onClick="parent.location='maintemp.html'" class="button button1">back to HOME page</button>

</body>
</html>