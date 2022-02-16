<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Код страницы 404</title>
<style>
html { height: 100%; }
body {
  background: #fff;
  }
.over {
  position: absolute; /* Абсолютное позиционирование */
  left: 0; right: 0; top: 0; bottom: 0; /* Отступы от краев браузера */
  }
._404 {
  margin-top: 100px;
  text-align: center; /* Выравнивание текста по центру */
  font-size: 10em;
  color: #000;
  position: relative; /* Относительное позиционирование */
  z-index: 2; /* Порядок наложения элемента по высоте */
  }
.notfound {
  text-align: center;
  color: #000;
  font-size: 2em;
  position: relative; /* Относительное позиционирование */
  z-index: 2; /* Порядок наложения элемента по слоям в глубину */
  }
.notfound a {
  color: #000;
  font-size: 0.8em;
  }
.notfound a:hover {
  color: 000;
  text-decoration: none;
  }
</style>
</head>
<body>
<div class="_404">404</div>
<div class="notfound">Страница не найдена<br>
</div>
</body>
</html>
