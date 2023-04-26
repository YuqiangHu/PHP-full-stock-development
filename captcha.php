<?php
session_start();

//Let's make a captcha image! :) 
//the header content-type will help to make the output of this php into image.
header("Content-type: image/jpeg");

//md5 to generate the random string
$randomstr = md5(microtime());

//trim 5 digit 
$randomstr = substr($randomstr,0,6);

//set the background image for the captcha
$bgimg =imagecreatefromjpeg("./image/captcha.jpg");

//set the line-color and text-color for the captcha
/**imagecolorallocate - Returns a color identifier representing the color composed of the given RGB components
imagecolorallocate (background image, int $red, int $green, int $blue )
find rgb picker from http://www.rapidtables.com/web/color/RGB_Color.htm**/
//pick line color for the captcha
$linecolor = imagecolorallocate($bgimg,255,255,255);
$textcolor = imagecolorallocate($bgimg,0,255,255);

//draw the line in the captcha
//imageline (background image, int $x1, int $y1, int $x2, int $y2, int $color )
//create line 1 on image 
imageline($bgimg,1,0,140,80,$linecolor);
//create line 2 on image
imageline($bgimg,1,100,120,0,$linecolor); 

//put the data(random string/digits from above) in the captcha
//imagestring (resource $image, int $font, int $x, int $y, string $string, int $color )
//Draw a random string horizontally 
imagestring($bgimg, 5, 50, 30, $randomstr, $textcolor);

//save the data(random string/digits from above) through session 
$_SESSION['captcha'] = $randomstr;

//Output image to browser 
imagejpeg($bgimg);

?>
