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
$image = imagecreatefromjpeg('../'.$image_url);
$output = "../static/images/flyers/out/".$domain.$opinion."-front.jpg";


header("Content-type: image/jpeg");

imagejpeg($image, $output, 100);
imagejpeg($image, NULL, 100);

