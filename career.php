<!DOCTYPE html >
<head>
<link rel="stylesheet" type="text/css" href="./css/career.css" />
<title>Career</title>


</head>
<body>

<header> 
	<div class="zerogrid">
		<div class="row">
			<div class="col05">
				<div id="logo"><a href="#"><img src="./image/logo.png"/ style="float:left"></a></div>
				<div> <h1 style="float:left; padding-left:5%; padding-top:15px; font-size:44px; color:#FF3300;">Career in IS</h1></div>
			</div>
			
 <div class="name">
<p>  IS FAVOUR</p>
 </div>
			
			<div class="col06 offset05">
			<div class="header-top-righ">
					<ul>
					<li><a href="login.php">Login/Register</a> |</li>
					<li><a href="contact.html">Contact us</a></li>
					</ul>	
				 </div>
				 </div>
						
					
			
			
			   <div id='search-box' >
				  <form action='search bar.php' id='search-form' method='get' target='_top'>
					<input id='search-text' name='keyword' placeholder='type here' type='text'/>
					<button id='search-button' type='submit' ><span>Search</span></button>
				  </form>
			  </div>
			</div>
		</div>
	</div>
</header>



<div id="nav">
    <ul>
        <li><a href="home page.html">HOME</a></li>
        <li><a href="career.php">CAREER</a>
            <ul>
                <li><a href="career.php">ANALISIS</a> </li>
                <li><a href="career.php">MANAGEMENT</a> </li>
				<li><a href="career.php">DATA</a> </li>
				<li><a href="career.php">INTERNET</a> </li>
				<li><a href="career.php">INFORMATION</a> </li>
				<li><a href="career.php">MAINTENANCE</a> </li>
            </ul>
        </li>
         <li><a href="forum.php">FORUM</a>
            <ul>
                <li><a href="forum.php">COMMENT</a> </li>
                <li><a href="forum.php">Q&A  </a></li> 
				<li><a href="forum.php">SUGGESION</a> </li>
            </ul>
        </li>
		 <li><a href="learning path.php">LEARNING PATH</a>
            <ul>
                <li><a href="learning path.php">HISTORY</a> </li>
                <li><a href="learning path.php">FURTHER LESSIONS</a> </li>
            </ul>
        </li>
		 <li><a href="recruitment.php">RECRUITMENT</a>
            <ul>
                <li><a href="recruitment.php">TYPICAL SAMPLE</a> </li>
                <li><a href="recruitment.php">COMPANY LINK</a> </li>
            </ul>
        </li>           
		
    </ul>
</div> 

<div>
<?php

include("session.php");
include("db_conn.php");

$submit=false;
$showtree=false;

  if(isset($_POST['submit']))
  {
    $error="";
    $submit=false;
	$showtree=false;
	$career="";
	
	if(!isset($_POST['career'])){
    	$error.="* Please select your Career"."<br/>";
    }
	else{$career=$_POST['career'];}
	
	if($error==""){
	    $modify_query="UPDATE users SET Career='$career' WHERE Username='$session_user'";
    	$mysqli->query($modify_query);
		
		$submit=true;
		}
}

   if(isset($_POST['reset']))
       {
	    header("location: ./career.php");
       }
	   
   if($_SESSION['access']==1) {
?>	
    <center><h3>RESEARCH</h3><br/></center>
    <center><table>
	<form action=""  method="POST">
	 <tr>
      <td class="title">Username</td>
      <td><input name="user" value="<?php echo $_SESSION['user'];?>" disabled /></td> </tr>
	  
     <tr>
          <td>* Career</td>
          <td>
               <select name="career" id="career">
               <option value="" selected="selected">Please select career.</option>
               <option value="Network">Network</option>
               <option value="Technical">Technical Support</option>
			   <option value="Computer">Computer</option>
			   <option value="Software">Software</option>
			   <option value="Accountant">Accountant</option>
			   <option value="Help Desk">Help Desk</option>
			   <option value="Information Technology">Information Technology</option>
			   <option value="Data">Data</option>
               </select></td></tr>   

	 <tr>
	  <td>
			<input type="submit" name="submit" value="Research" class="button">
			<input type="submit" name="reset" value="Reset" class="button"></td></tr>
	 
	  <tr><td><?php
	            if (isset($error)) {
    			echo $error; } ?></td></tr>
	  <p id="warn"> <?php if ($submit == true ){echo "Now shows the skill trees for the selected 3 jobs.";}
										   else{echo "Please select career first!";}?> </p>
</table> </center> 
</div>
  
<div>
<?php

if ($submit == true)
 {
$selectquery ="SELECT c.career,c.Job1,c.Job2,c.Job3,c.Description1,c.Description2,c.Description3,c.Trend1,c.Trend2,c.Trend3,c.Trend4,c.Skill1,c.Skill2,c.Skill3,c.Skill4,c.Skill5,c.Skill6,c.Skill7,c.Skill8,c.Skill9 FROM users u,careers c WHERE u.username='$session_user' AND u.career=c.career";
 
 $result = $mysqli->query($selectquery);
 $row=$result->fetch_array(MYSQLI_ASSOC);
?>

<div class = "account2">
<div id="show">
<div id="left">
<ul>
<li><h2>Job 1</h2></li>
<li class="section"><?php echo $row['Job1'];?></li>
<li class="section2"><?php echo $row['Description1'];?></li>
</ul></div>
<div id="middle">
<ul>
<li><h2>Job 2</h2></li>
<li class="section"><?php echo $row['Job2'];?></li>
<li class="section2"><?php echo $row['Description2'];?></li>
</ul></div>
<div id="right">
<ul>
<li><h2>Job 3</h2></li>
<li class="section"><?php echo $row['Job3'];?></li>
<li class="section2"><?php echo $row['Description3'];?></li>
</ul></div>
</div>

        <ul class="jobs">
            <li class="job">
                <h2>Career</h2>
				<div class="title">
					<p class="section"><?php echo $row['career'];?></p>
					<ul class="trends">		
					<li class="trend1" >
                            <div class="line line1" style="padding:10px;">
                        <h2> Development Trend</h2>
                        </li>		
                        <li class="trend">
                            <div class="line line2"></div>
                           <p> <?php echo $row['Trend1'];?></p>
                        </li>
                        <li class="trend">
                            <div class="line line3"></div>
                            <p> <?php echo $row['Trend2'];?></p>
                        </li>
						<li class="trend">
                            <div class="line line4"></div>
                            <p> <?php echo $row['Trend3'];?></p>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                            <p> <?php echo $row['Trend4'];?></p>
                        </li>
                  </ul>
                </div>
	
							
                <div class="description">
                   <p><?php echo $row['Description1'];?></p>
                </div>
            </li>
        </ul>
    </div>
 <div class="skills">
                    <ul class="trends">				
                        <li class="trend1" >
                            <div class="line line1"></div>
                          <h2> Skills</h2> 
                        </li>
                        <li class="trend">
                            <div class="line line2"></div>
                           1. <?php echo $row['Skill1'];?>
                        </li>
                        <li class="trend">
                            <div class="line line3"></div>
                           2. <?php echo $row['Skill2'];?>
                        </li>
						<li class="trend">
                            <div class="line line4"></div>
                           3. <?php echo $row['Skill3'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                           4. <?php echo $row['Skill4'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                          5.  <?php echo $row['Skill5'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                          6.  <?php echo $row['Skill6'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                          7.  <?php echo $row['Skill7'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                          8.  <?php echo $row['Skill8'];?>
                        </li>
						<li class="trend">
                            <div class="line line5"></div>
                          9.  <?php echo $row['Skill9'];?>
                        </li>
                  </ul>
                </div>
				
 <?php
 }
 }
 else {?><p id="warn"><?php echo "You need to log in first !!<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";}?></p>
 
</div>

<div class ="footer">
<div class="about">
<p>About us</p>
   <ul>
                <li><a href="contact.html">Mission & Vision</a> </li>
                <li><a href="contact.html">Staff</a> </li>
				<li>Annual Reports</a> </li>
				<li>Partners</a> </li>
				<li>Join us</a> </li>
    </ul>
</div>

<div class="idea">
<p>Grow your career.</p>
</div>
 
 <div class="IS">
<p><img class="i2" src="image/logo.png">  IS FAVOUR</p>
 </div>
</div>
 
 
 <div id="copyright">
	<ul>
	<li style="margin-left:70px;">Copyright  2019 IS FAVOUR&nbsp&nbsp&nbsp;</li>
   <li><a href="home page.htnl">Home</a> |</li>
   <li><a href="career.php">Career</a> |</li>
   <li><a href="forum.php">Forum</a> |</li>
   <li><a href="learning path.php">Learning Path</a> |</li>
   <li><a href="recruitment.php">Recruitment</a> |</li>
    <li><a href="reference.html">Reference</a></li>
   <li style="margin-left:480px"><img src="image/footer.png"></li>
</ul>	
</div>
</footer>


</body>
</html>