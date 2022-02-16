<? 
session_start();
if ($_SESSION['opinion']=="opinion" || !isset($_SESSION['opinion'])){
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $opinion = substr(str_shuffle($permitted_chars), 0, 10);
}else{
    $opinion = $_SESSION['opinion'];
}

if (isset($_SESSION['domain'])){
$domain =  $_SESSION['domain'];
}else{
    $domain = 'eazymatcha.com';
}


$image_url = $_GET['img'];

$qr_code = $_GET['qr'];
$qr_image = imagecreatefrompng('../'.$qr_code);
$image = imagecreatefromjpeg('../'.$image_url);
$href = explode("/", $image_url);
$href[3] = 'out';
$output = "../static/images/flyers/out/".$domain.$opinion."-back.jpg";

$qr_width =imagesx($qr_image);
$qr_height =imagesy($qr_image);
$flyer_width =imagesx($image)*76/100;
$flyer_height =imagesy($image)*55/100;
$im_w =imagesx($image)*0.1;
$im_h =imagesy($image)*0.185;
$x  = $flyer_width / 50 * 100;
$y = $flyer_height / 50 * 100;




imagecopyresampled($image, $qr_image, 1488*0.1, 1748*0.185, 0, 0, $flyer_width, $flyer_height, $qr_width, $qr_height);

header("Content-type: image/jpeg"); 

imagejpeg($image, $output, 100);
imagejpeg($image, NULL, 100);

