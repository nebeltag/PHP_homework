<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
   <h1><?=$pageHeader?></h1>
   
  <?php if ($username !== null) : ?>
  <p>Рады Вас приветствовать, <?=$username?>.<br>
  <a href = "/?action=logout">Sign Out</a></p>
  <a href = "/?controller=home">Homepage</a></p>
  <?php else : ?>
    <p>Авторизуйтесь</p>
    <a href = "/?controller=security">Sign In</a>
  <?php endif ?>

</body>