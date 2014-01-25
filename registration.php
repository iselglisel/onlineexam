<?php
include_once('config.php');
include_once('validation.php');
?>
<html>
<head>
	<title>Registration Form</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
          	<font size="20px" style="margin-left:5px;">Registration Form</font>
    </div>
   </div>
   </div>

   	<div class="row" style="margin-top:200px">
    <form method="POST" action="insert.php" name="registration">
    <table align="center" style="margin-top:10px">
    <tr>

    	<td><b>First Name:&nbsp;&nbsp;</td>
    	<td><input type="text" id="fname" name="fname" onblur='check_name()' placeholder="First Name" style="margin-right:67px;height:30px;" ></td>
    </tr>
    <tr>
    	<td><b>Last Name:&nbsp;&nbsp;</td>
    	<td><input type="text" id="lname" name="lname" onblur='check_lname()' placeholder="Last Name" style="margin-right:67px;height:30px;"></td>
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
  	<input type="submit" class="btn btn-primary" onclick = "return validate();"style="margin-left:650px;margin-top:15" value="Sign Up">
    </form>
	</div>
	 <a href="signIn.php"><input type="submit" class="btn btn-success" style="margin-left:710px;margin-top:-46" value="Sign In"></a>
		

<script type = "text/javascript">
	function check_name(){
		var name = document.getElementById("name").value;
			if(name.length > 4){
				return true;
			}else{
				document.getElementById("fname").innerHTML = 'Enter 5-30 char name';
				return false;
		}
}
	function check_lname(){
		var lname = document.getElementById("lname").value;
			if(lname.length > 4){
				return true;
			}else{
				document.getElementById("lname").innerHTML = 'Enter 5-30 char Surname';
				return false;
		}
}
</script>
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
</body>
</html>