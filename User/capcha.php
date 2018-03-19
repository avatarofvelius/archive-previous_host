<?php 
session_start(); 
$myFile = "capcha.png";
$fh = fopen($myFile, 'w') or die("can't open file");
fclose($fh);
 
$myFile = "capcha.png";
unlink($myFile);

$width = 160; 
$height = 50; 
$im = imagecreate($width, $height); 
$bg = imagecolorallocate($im, 51, 102, 153); 

// generate random string 
$len = 9; 
$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
$string = ''; 
for ($i = 0; $i < $len; $i++) { 
    $pos = rand(0, strlen($chars)-1); 
    $string .= $chars{$pos}; 
} 


$_SESSION['captcha_code'] = $string; 

$grid_color = imagecolorallocate($im, 51, 102, 153); 
$number_to_loop = ceil($width / 16); 
for($i = 0; $i < $number_to_loop; $i++) { 
    $x = ($i + 1) * 25; 
    imageline($im, $x, 0, $x, $height, $grid_color); 
} 
$number_to_loop = ceil($height / 10); 
for($i = 0; $i < $number_to_loop; $i++) { 
    $y = ($i + 1) * 10; 
    imageline($im, 0, $y, $width, $y, $grid_color); 
} 


$text_color = imagecolorallocate($im, 255, 255, 204); 
$rand_x = rand(0, $width - 80); 
$rand_y = rand(0, $height - 40); 
imagestring($im, 10, $rand_x, $rand_y, $string, $text_color); 

imagepng($im, "capcha.png"); 
imagedestroy($im);
// echo $_SESSION['captcha_code']; <-- The Captcha Code
?> 

<style type="text/css">

Body
   {
    background-color: #336699;
    font-family: sylfaen;
    font-size: 10pt;
    color: #FFFFCC;
   }
H1 {
   font-family: sylfaen;
   color: #FFFFCC;
   font-size: 18px;
   }

P {
   text-indent: 20px;
   font-family: sylfaen;
   color: #FFFFCC;
   text-align: left;
   font-size: 12px;
  }
  
</style>


<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("Capcha.php");
    </Title>
  </Head>
  
  <Body>

<?php 

if(isset($_POST['submit'])) { 
    if(isset($_POST['captcha_code']) && isset($_SESSION['captcha_code'])) { 
        if($_POST['captcha_code'] == $_SESSION['captcha_code']) { 
            echo 'Result: CAPTCHA code correct.<br />'; 
        }else{ 
            echo 'Result: CAPTCHA code incorrect.<br />'; 
        } 
    }else{ 
        if(!isset($_POST['captcha_code'])) { 
            echo 'Result: No security code was entered.<br />'; 
        } 
        if(!isset($_SESSION['captcha_code'])) { 
            echo 'Result: No CAPTCHA was viewed.<br />'; 
        } 
    } 
} 
?> 

<form method="POST" action="okCapcha.php"> 
Enter the text below as it appears. Note: It is case sensitive<br /> 
<br />
<input type="text" name="captcha_code" /> 
<input type="submit" name="submit" value="Submit" /> &nbsp; &nbsp; <A Href="capcha.php">Refresh</A>
<br /> 
<br />
<img src="capcha.png" /> 
</form> 

