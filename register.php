<?php

include("session.php");
include('db_conn.php');

$submit=false;

$user="";
$password="";
$retypepassword="";
$name="";
$gender="";
$country = range(1970,2018);
$year="";
$month="";
$email="";

if(isset($_POST['submit']))
{
$submit=false;
$error="";

$user=$_POST['username'];
$password=$_POST['password'];
$retypepassword=$_POST['retypepassword'];
$name=$_POST['name'];
$year=$_POST['year'];

$email=$_POST['email'];

$query = "SELECT * FROM users WHERE Username='$user'";
$result = $mysqli->query($query);
$row=$result->fetch_array(MYSQLI_ASSOC);


  if($user !="" && $row['Username']== $user)
  {  
    $error.="* Username already exists.<br/>";
	}
   else if(!preg_match("#[a-z]+#", $user) && !preg_match("#[A-Z]+#", $user)){
    $error.="* Username must include at least one letter!<br/>";
	}
	
  if(strlen($password)<5 || preg_match("/\s/",$password)){
    $error.="* The password must contain at least 5 characters without any spaces.<br/>";
	}
   else if($password != $retypepassword)
   {  
    $error.="* Retyped password is not same as the typed password.<br/>";
   }
 
  if ($name=="") {
     $error.="* The First and Last Name must be input.<br/>";
	 }
	 
  if(!isset($_POST['gender'])){
     $error.="* The gender must be picked.<br/>";
	 }
  else{$gender=$_POST['gender'];}
	 
  if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
	$error.="* Please type the correct format of email address.<br/>";
    }
	
  if($year==""){
    $error.="* Please select the year of birth.<br/>";
    }
    
   if(!isset($_POST['month'])){
    $error.="* Please select the month of birth.<br/>";
    }
	else{$month=$_POST['month'];}
	
	if(!isset($_POST['day'])){
    $error.="* Please select the day of birth.<br/>";
    }
	else{$day=$_POST['day'];}
	
  if($_SESSION['captcha']!=$_POST['captcha']) {
    $error.="* Captcha incorrect.";
    }
   
if($error==""){
        $encrypt_password=MD5($password);
        $insertquery ="INSERT INTO users (ID, Username, Password, Name, Gender, DOB, Email, Access) VALUES                 ('','$user','$encrypt_password','$name','$gender','$year-$month-$day','$email',2)";
	    $result = $mysqli->query($insertquery);
		
		$_SESSION['user']= $user;
		$_SESSION['access']= 2;
		
	    $submit=true;		
}
}

if(isset($_POST['reset']))
{ header("location: ./register.php");
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/css-login,register.css" />
 <script src="http://code.jquery.com/jquery-latest.js"></script>
            <script type="text/javascript">
       function setup_country_change()
		{
			$('#country').change(update_states);
		}
		function update_states()
		{
			var country = $('#country').val();
			$.get("get_month.php",{country:country},show_states);	
			
		}
		function show_states(states)
		{
			//put the data(select area from get_cities.php)
			$('#st').html(states);
			
			//after putting the (city) select area
			
			setup_states_change();						
		}
		
		function setup_states_change()
		{
			//check whether the select area id(city) is changed
			$('#state').change(update_cities);
		}
		
		function update_cities()
		{	
                        var countries = $('#country').val();
			var states = $('#state').val();
			$.get("get_day.php",{states:states,countries:countries},show_cities);
			
		}
		function show_cities(cities)
		{	
			$('#ci').html(cities);
			
		}
		
		$(document).ready(setup_country_change);
            </script>    
<title>Register</title>
</head>
<body>

<div class="account2">

<center><h3>REGISTER</h3></center>

<form  method="post">

<center><table>
<!--when the submit button is clicked, the submitted data(username, password) will be sent to signin_engine.php -->

 <tr><p id="warn"><?php if ($_SESSION['access']== 1 || $_SESSION['access']== 2) {echo "You already have an account. [3s] to go back to Home";
                         header("REFRESH: 3; URL=home page.html");}?></p></tr>
						 
 <tr><p id="warn"> <?php if ($submit == true){echo "The account is successfully submitted.";} ?> </p></tr>
 
 <tr> 
     <td> *Username:</td>
       <td><input name="username" type="text" id="username" value="<?php echo "$user";?>"></td></tr>
              
 <tr> 
      <td> *Password:</td>
        <td><input name="password" type="password" id="password" value="<?php echo "$password";?>"></td></tr>
 <tr> 
      <td> *Re-type Password:</td>
        <td><input name="retypepassword" type="password" id="Retype password" value="<?php echo "$retypepassword";?>"></td></tr> 
 <tr> 
      <td> *Name:</td>
        <td><input name="name" type="text" id="name" value="<?php echo "$name";?>"></td></tr>
<tr>
      <td>*Gender:</td>
         <td><label><input name="gender" type="radio" value="Male" />Male </label> 
             <label><input name="gender" type="radio" value="Female" />Female </label> </td></tr>		 
<tr>
<tr>
      <td>*Year of Birth</td>
     <?php			
							     echo "<td id='countries'>";

                                echo "<select name='year' id='country'>";

                                echo "<option value='default' selected='selected'>Please select Year</option>";

                                foreach($country as $value)
                                {
                                    echo "<option value='$value'>$value</option>";
                                }

                                echo "</select>";

                                echo  "</td>";
                            ?></tr>
						
                        <tr id="st">
                        </tr>

                        <tr id="ci">	
                        </tr>
						
 <tr> <td> &#8197 Email:</td>
        <td><input name="email" type="text" id="email" value="<?php echo "$email";?>"></td></tr>

 <tr>
	  <td class="label">* Captcha</td>
         <td> <img id="captcha" src="captcha.php"/><br/>
	     <input type="text" name="captcha" id="captcha-form" autocomplete="off" /><br/>	</td></tr>
  
  <tr> 
       <td><a class="back" href='home page.html'>Back to Home Page</a></td>
          
		  <td><input class="button" type="submit" name="submit" value="Register">
               <input class="button" type="submit" name="reset" value="Reset"></td></tr>
   
      <tr> <td id="error" colspan="2">
		   <?php
           if (isset($error)) {
    			echo $error; } 
		   else echo "* Theses fields must be filled except email blank !<br/>
		              * Username must include at least one letter !<br/>
			          * Password must contain at least 5 characters without any spaces !<br/>
					  * Name of the First and Last Name must be input !";
				?></td>
</tr>
</table></center>
</form>
</div>
</body>
</html>
