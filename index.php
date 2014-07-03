<html>
   <head>
      <?php require "logic.php"; ?>

      <link rel='stylesheet' type='text/css' href='stylesheets/default.php' />

   </head>

<body>
   <h1>It's <?php echo date("h:ia"); ?></h1>
   <h5><?php echo date("e"); ?></h5>

   <img src="images/php-<?php echo $timeOfDay; ?>.png" />
</body>

</html>