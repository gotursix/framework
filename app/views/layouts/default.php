<?php
use Core\Session;
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->siteTitle(); ?></title>
    <link href="<?=PROOT?>css/custom.css" rel="stylesheet">
    <link href="<?=PROOT?>css/custom2.css" rel="stylesheet">
    <link href="<?=PROOT?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=PROOT?>js/jQuery-3.3.1.js"?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<?= $this->content('head'); ?>
  </head>
  <body>
    <?php include 'main_menu.php' ?>
    <?= Session::displaymsg(); ?>
    <?= $this->content('body'); ?>
  </body>
</html>
