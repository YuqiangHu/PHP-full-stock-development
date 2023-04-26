
<?php

include('session.php');
include('db_conn.php');


$errorMessage="";

if(isset($_GET['error']))
{
$errorMessage=$_GET['error'];
//show error message using javascript alert
echo "<script>alert('$errorMessage');</script>";
}


//if the 'logout' link is clicked 
if(isset($_GET['logout']))
{
   if($_GET['logout']=="true"){

	//destroy all session
	session_destroy();
	
	header("REFRESH: 2; URL=home page.html");
   }
}


//if click 'submit' button 
if(isset($_POST['submit']))

{
   $user=$_POST['username'];
   $password=$_POST['password'];

   $query = "SELECT * FROM users WHERE Username='$user'";
   $result = $mysqli->query($query);
   $row=$result->fetch_array(MYSQLI_ASSOC);

        if($row['Username']!=$user || $user=="")
       {
         header('Location: ./login.php?error=Invalid_username');
       } 
	   
       else {

       if($row['Password']==MD5($password)) {
	   
//save the username in the session
        $_SESSION['user']=$user;
        $_SESSION['access']=$row['Access'];
		
        header('Location: ./home page.html');
        } 
        else {
		
//automatically go back to login_form and pass the error message
        header('Location: ./login.php?error=Invalid_password');
        }
    }  
}
?>


<html>
<link rel="stylesheet" type="text/css" href="./css/css-login,register.css" />

<title>Login</title><body>
<div class="account2">
<center>
<h1>LOG IN</h1>
</center>

<?php
//if the user hasn't logged in

if($_SESSION['user']=="")
{
     //add errormessage  
       echo $errorMessage ;
?>
	<!--show the following login form if the user hasn't logged in-->
	<center><h2>Please login to the system</h2></center>
     
<form method='post'>
	<center><table>
			<tr>
				<td>Username :</td><td><input class="button" type='text' name='username'></td>
			</tr>
			<tr>
				<td>Password :</td><td><input class="button" type='password' name='password'></td>
				<td><input class="button" type='submit' name='submit' value='Submit'></td>
			</tr>     
			<tr>
				<!--go to Sign Up form-->
				<td><a href='register.php'>Register</a></td>
				<td><a href='home page.html'>Back to Home Page</a></td>
			</tr>
  </table></center>
	</form>

<?php		
}


else{ //if the user has logged in

	//show welcome username
	echo "<h3>Welcome ".$_SESSION['user'];
?><br/><br/>

     <a href="home page.html">[Go Back to Home Page]</a>
	 
	 <br/><br/>
     <a href='login.php?logout=true'>Logout</a><br/>
<?php
	}
?>
</div>
</body>
</html>