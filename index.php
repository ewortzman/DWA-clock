<html>
   <head>
      <?php require "logic.php"; ?>

      <link rel='stylesheet' type='text/css' href='stylesheets/default.css' />

   </head>

<body id="<?php echo $timeOfDay ?>">
   <h1>It's <?php echo date("h:ia"); ?></h1>
   <h5><?php echo date("e"); ?></h5>

   <img src="images/php-<?php echo $timeOfDay; ?>.png" />
</body>

</html>