<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <link rel="icon" type="images/png" href='<?=$baseURL."/img/favicon.png"?>'>
        <link rel="stylesheet" href='<?=$baseURL."/css/bootstrap.min.css"?>'>
        <link rel="stylesheet" href='<?=$baseURL."/css/styles.css"?>'>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <title>EURODO</title>
    </head>

    <body>
        
        <main>
           <?=$content?> 
            
        <script src='<?=$baseURL."/js/jquery.js"?>'></script>
        <script src='<?=$baseURL."/js/scripts.js"?>'></script>
        <script src='<?=$baseURL."/js/form.js"?>'></script>
        <script src= "<? echo $baseURL."/js/session.js" ?>"></script>
    </body>
</html>