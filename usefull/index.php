<?php $this->setSiteTitle('Home'); ?>

<?php $this->start('head'); ?>
<script>//here java script,next row css</script>
<style></style>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<h1>Welcome to Rufus Framework</h1>
<?php $this->end(); ?>

<?php
//Get param url
public function indexAction($name)
  {
   echo $name;
   $this->view->render('home/index');
  }
?>
