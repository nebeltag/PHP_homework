<a href = "/?controller=home">Homepage</a>
<a href = "/?controller=task">Tasks</a>

<?php if ($username !== null) : ?>
  <p>Рады Вас приветствовать, <?=$username?>.<br>
  <a href = "/?action=logout">Sign Out</a></p>
  <?php endif ?>

  
