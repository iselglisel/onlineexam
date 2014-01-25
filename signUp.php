<?php
include_once('config.php');
include_once('validation.php');
?>

<html>
<head>
	<title>Registration</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "myStyle.css" >
</head>
	<div class="span12">
		<div class="row">
			<div class="navbar navbar-fixed-top">
        		<div class="navbar-inner">
          			<div class="container">
            			<a  class="brand brand-bootbus"><img src="logo.png" width="80px"><font face="tolkien">&nbsp;La Verdad Online Examination</font></a>
            				<div class="nav-collapse collapse">        
              					<ul class="nav pull-right">
				                 <li><a href="signUp.php">Sign Up</a></li>           
				                 <li><a href="signIn.php">Sign In</a></li>
              					</ul>
            				</div>
          			</div>
        		</div>
      		</div>
      	</div>
     </div>

    <div class="span8" style="margin-top:200px">
      <div class="column">
    <form method="POST" action="insert.php" name="registration">
    <table align="center" style="margin-top:10px">
    <tr>
      <hr width="84%">
      <font size="14">Welcome!</font><br><br>
          <font color="red">Sign Up now</font>

      <td><b>First Name:&nbsp;&nbsp;</td>
      <td><input type="text" id="fname" name="fname" onblur='check_name()' placeholder="First Name" style="margin-right:67px;height:30px;" ></td>
      <td><span id = 'err_name'></span></td>
    </tr>
    <tr>
      <td><b>Last Name:&nbsp;&nbsp;</td>
      <td><input type="text" id="lname" name="lname" onblur='check_lname()' placeholder="Last Name" style="margin-right:67px;height:30px;"></td>
      <td><span id = 'err_lname'></span></td>
    </tr>
    <tr>
      <td><b>E-mail: &nbsp;&nbsp;</td>
      <td><input type="text" id="email" name="email" placeholder="E-mail" style="margin-right:67px;height:30px;" onblur="checkMail()"></td>
    </tr>
    <tr>
      <td><b>Password: &nbsp;&nbsp;</td>
      <td><input type="password" id="pass" name="pass" placeholder="Password" style="margin-right:67px;height:30px;"></td>
    </tr>
    <tr>
      <td><b>Confirm Password: &nbsp;&nbsp;</td>
      <td><input type="password" id="confirm" name="confirm" placeholder="Confirm Password" style="margin-right:67px;height:30px;"></td>
    </tr>
    </table>
    <input type="submit" class="btn btn-primary" onclick = "return validate();"style="margin-left:295px;margin-top:15;" value="Sign Up">
    <br><hr width="84%">
    <img src="fbimg.jpg">
    <img src="twitimg.jpg">
    <img src="gooimg.jpg">
    </form>
  </div>

      <div class="footer">
        <div clas="span2">
          All Rights Reserved @ 2014
        </div>

        </div>

      </div>
</div>
</div>

<script type="text/javascript">
    function validate(){
    var a=document.forms["registration"]["fname"].value;
    var b=document.forms["registration"]["lname"].value;
    var c=document.forms["registration"]["email"].value;
    var d=document.forms["registration"]["pass"].value; 
    var g=document.forms["registration"]["confirm"].value;

    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    else if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    else if (c==null || c=="")
    {
      alert("email must be filled out");
      return false;
    }
    else if (d==null || d=="")
    {
      alert("Password must be filled out");
      return false;
    }
    else if (g != d)
    {
      alert("Password not match!");
      return false;
    }else{
      return true;
    }
    }
    </script>

</html>