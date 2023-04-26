<?php


$host = 'localhost';          
$port = '3306';            
$dbname = 'kxo302';    
$username = 'root';         
$passworld = '';        
$charset = 'utf8';         


if (class_exists('PDO')) {
    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s', $host, $port, $dbname);
    $pdo = new PDO($dsn, $username, $passworld, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => sprintf('SET NAMES %s', $charset)
    ));
} else {
    die('PDO MODULE MUST BE ENABLED!');
}


if (!function_exists('request')) {
    function request($key, $default = null) {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
    }
}


if ($keyword = request('keyword', '')) {
    $sql = <<<EOF
SELECT *
FROM `careers`
WHERE `Career` LIKE "%{$keyword}%"
OR `Job1` LIKE "%{$keyword}%"
OR `Job2` LIKE "%{$keyword}%"
OR `Job3` LIKE "%{$keyword}%"
OR `Description1` LIKE "%{$keyword}%"
OR `Description2` LIKE "%{$keyword}%"
OR `Description3` LIKE "%{$keyword}%"
OR `Trend1` LIKE "%{$keyword}%"
OR `Trend2` LIKE "%{$keyword}%"
OR `Trend3` LIKE "%{$keyword}%"
OR `Trend4` LIKE "%{$keyword}%"
OR `Skill1` LIKE "%{$keyword}%"
OR `Skill2` LIKE "%{$keyword}%"
OR `Skill3` LIKE "%{$keyword}%"
OR `Skill4` LIKE "%{$keyword}%"
OR `Skill5` LIKE "%{$keyword}%"
OR `Skill6` LIKE "%{$keyword}%"
OR `Skill7` LIKE "%{$keyword}%"
OR `Skill8` LIKE "%{$keyword}%"
OR `Skill9` LIKE "%{$keyword}%"
EOF;
    $results = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
} else {
    $results = array();
}
?>
<!DOCTYPE html >
<head>
<link rel="stylesheet" type="text/css" href="./css/search bar.css" />
    <title>Career Search</title>

</head>
<body>
<header> 
	<div class="zerogrid">
		<div class="row">
			<div class="col05">
				<div id="logo"><a href="home page.html"><img src="./image/logo.png"/ style="float:left"></a></div>
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

    <div class="main">
       
        <form action="" method="get" class="search-form">
            <div class="form-item">
                <label for="key-world">KEYWORD</label>
                <input type="text" id="key-world" name="keyword" value="<?php echo $keyword; ?>" placeholder="job or skill">
            </div>
            <div class="form-item">
                <button type="submit">Search</button>
            </div>
        </form>

       
        <?php if (!empty($keyword)): ?>
        <div class="search-result">
            <?php if (empty($results)): ?>
           
            <p class="empty-info">There is no result for <?php echo $keyword; ?></p>
            <?php else: ?>
            
            <p class="result-info">There are <?php echo count($results) ?> results for "<?php echo $keyword; ?>"</p>
            <ul class="search-result-list">
                <?php foreach ($results as $result): ?>
                <li class="search-result-item">
              
                    <p class="career"><a href="<?php echo $result['Link'] ?>" target="_blank"><?php echo $result['Career']; ?></a></p>
                   
                    <p clas="description"><?php echo $result['Description1']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
	
	<div class ="footer">
<div class="about">
<p>About us</p>
   <ul>
                <li><a href="contact.htnl">Mission & Vision</a> </li>
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
   <li><a href="home page.html">Home</a> |</li>
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
