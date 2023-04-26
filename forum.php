<!DOCTYPE html >
<head>
<link rel="stylesheet" type="text/css" href="./css/forum.css" />
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


<?php

include("session.php");
include("db_conn.php");

function request($key, $default = null) {
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
}

if (file_exists('faq.json')) {
    $faq = file_get_contents('faq.json');
    try {
        $data = json_decode($faq, true);
    } catch (Exception $e) {
        $data = array();
    }
} else {
    $data = array();
    file_put_contents('faq.json', json_encode($data));
}

if (request('action') == 'reply') {   
    // 保存逻辑
    array_push($data, array(
        'to' => request('to', ''),
        'msg' => request('msg', ''),
        'ts' => date('Y-m-d H:i:s'),
    ));

    file_put_contents('faq.json', json_encode($data));

    header('faq.php'); // 保存完，跳转
} else {
    // 展示逻辑
}
 if($_SESSION['access']==1) {
?>
 
<div class="table">
	   <!-- 显示问题内容，相当于帖子的主题帖，固定内容就好 -->
    <div class="msg">
        <h1>ANSWER SHEET</h1>
        <p>Reply to the Question</p>
    </div>

    <!-- 显示评论内容，相当于回帖 -->
    <div class="list">
        <?php foreach ($data as $reply): ?>
            <!-- 单个评论 -->
            <div>
                <!-- 评论内容 -->
                <div>
                    <!-- 如果是回复贴，显示原帖的内容 -->
                    <?php if ($reply['to']): ?><p><?php echo $reply['to']; ?></p><?php endif; ?>
                    <!-- 当前评论内容 -->
                    <p><?php echo $reply['msg'] ?></p>
                    <p style="text-align:right"><span><?php echo $reply['ts'] ?></span></p>
                </div>
                <!-- 回复表单 -->
                <div>
                    <p style="text-align:right"><a href="javascript: void(0)" class="reply-link">Reply</a></p>
                    <form action="" method="post" style="display: none;">
                        <input type="hidden" name="action" value="reply">
                        <input type="hidden" name="to" value="<?php echo $reply['msg'] ?>">
                        <textarea name="msg" cols="30" rows="10"></textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- 评论表单 -->
    <div class="add">
        <p>COMMENT</p>
        <form action="" method="post">
            <input type="hidden" name="action" value="reply">
            <textarea name="msg" cols="100" rows="10"></textarea><br>
            <input type="submit" value="submit">
        </form>
    </div>

</div>
    <script>
        $(function () {
            $('.reply-link').click(function () {
                $(this).parent().next().show()
            })
        })
    </script>	  

<?php
}
else {?><p id="warn"><?php echo "You need to log in first !!<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";}?></p>


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
