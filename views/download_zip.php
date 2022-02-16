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
    $output_front = "../static/images/flyers/out/".$domain.$opinion."-front.jpg";
    $output_back = "../static/images/flyers/out/".$domain.$opinion."-back.jpg";

    $zip = new ZipArchive(); // подгружаем библиотеку zip
    $zip_name = $domain.$opinion.".zip"; // имя файла
    if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
    {
        $error = "* Sorry ZIP creation failed at this time";
        echo $error;
    }
        $zip->addFile( $output_front, '/images/'.$domain.$opinion.'-front.jpg'); // добавляем файлы в zip архив
        $zip->addFile( $output_back, '/images/'.$domain.$opinion.'-back.jpg'); // добавляем файлы в zip архив
    $zip->close();
    if(file_exists($zip_name))
    {
        // отдаём файл на скачивание
        header('Content-type: application/zip');
        header('Content-Disposition: attachment; filename="'.$zip_name.'"');
        readfile($zip_name);
        // удаляем zip файл если он существует
        unlink($zip_name);
    }