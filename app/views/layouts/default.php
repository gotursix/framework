<?php
use Core\Session;
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?= $this->content('head'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->siteTitle(); ?></title>

    <link href="<?=PROOT?>css/custom2.css" rel="stylesheet">
    <link href="<?=PROOT?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=PROOT?>css/font-awesome.min.css" >
    <link href="<?=PROOT?>css/lightgallery.css" rel="stylesheet">
    <script src="<?=PROOT?>js/jQuery-3.3.1.js"?></script>
    <script src="<?=PROOT?>js/popper.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    <script src="<?=PROOT?>js/lightgallery.js"></script>
    <script src="<?=PROOT?>js/lg-autoplay.js"></script>
    <script src="<?=PROOT?>js/lg-fullscreen.js"></script>
    <script src="<?=PROOT?>js/lg-zoom.js"></script>
  </head>
  <body>
    <?php include 'main_menu.php' ?>
    <?= Session::displaymsg(); ?>
    <?= $this->content('body'); ?>
  </body>
</html>
