<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->siteTitle(); ?></title>
    <link href="<?=PROOT?>css/bootstrap.css" rel="stylesheet">
    <script src="<?=PROOT?>js/jquery-3.3.1.js"></script>
    <script src="<?=PROOT?>js/bootstrap.js"></script>
<?= $this->content('head'); ?>
  </head>
  <body>
    <?= $this->content('body'); ?>
  </body>
</html>
