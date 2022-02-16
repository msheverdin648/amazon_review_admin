<?if($session===null):?>
    <form>
        <div class="form-group">
        <a href="/admin/login" class="btn btn-primary">Log In</a>
        </div>
      </form>
      <style>
      body{
        height: 100%;
      }
      html{
        height: 100%;
      }
        form{
          width: 100%;
          display: flex;
          height: 100%;
          align-items: center;
          justify-content: center;
        }
        .btn{
          display: block;
          text-align: center;
          background: #1890FF;
          color: #fff;
          width: 300px;
          border-radius: 2px;
          cursor: pointer;
          padding: 15px;
          text-decoration: none;
        }

      </style>
<? else: ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="120x120" href="/static/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/static/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/static/images/favicon-16x16.png">
        <link rel="manifest" href="static/images/site.webmanifest">
        <link rel="mask-icon" href="static/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>EURODO</title>
        <link href="/static/css/select.css" rel="stylesheet">
        <link href="/static/css/style.css" rel="stylesheet">
        <script src="/static/js/jquery-3.5.1.min.js"></script>
    </head>

    <body class="body-home">
        <div class="wrapper">
            <header class="header">
                <div class="header__body">
                    <div class="header__logo">
                        <a class="logo" href="/admin">
                            <picture><img src="/static/images/logo.svg" alt="Logo"></picture>
                        </a>
                    </div>
                    <div class="header__menu">
                        <nav class="menu">
                            <ul class="menu__list">
                                <li class="menu__item menu__item<? if ($page_url == '/') {
                                                                    echo '--active';
                                                                }; ?>"><a class="menu__link" href="/">Акции</a></li>
                                <li class="menu__item menu__item<? if ($page_url == '/domain' || $page_url == '/done') {
                                                                    echo '--active';
                                                                }; ?> "><a class="menu__link" href="/admin/domain">Домены</a></li>
                                <li class="menu__item">
                                    <p class="menu__link"><?= $session->user['email'] ?></p>
                                </li>
                                <li class="menu__item"><a class="menu__link" href="/admin/logout">Выход</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__hamburger">
                        <button class="hamburger hamburger--spin" type="button" id="hamburger"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                    </div>
                </div>
            </header>

            <? echo $content;?>

            <script src="/static/js/svg4everybody.min.js"></script>
            <script>
                $(document).ready(function() {
                    svg4everybody({});
                });
            </script>
            <script src="/static/js/select.js"></script>
            <script src="/static/js/script.js"></script>
            <script src="/static/js/product-variations.js"></script>
            <script src="/static/js/inputValidationPart.js"></script>
            
            
        </div>
    </body>

</html>

<? endif;?>