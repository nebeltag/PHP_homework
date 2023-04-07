<a href = "/?controller=home">Homepage</a>
<a href = "/?controller=tasks">Tasks</a>

<?php if ($username !== null) : ?>
  <p>Рады Вас приветствовать, <?=$username?>.<br>
  <a href = "/?controller=security&action=logout">Sign Out</a></p>
  <?php endif ?>

  
