<?php
use Core\FH;
 ?>
 <div class="container">
<form class="form-row" action=<?= $this->postAction?> method="post">
<?= FH::csrfInput() ?>
<?= FH::inputBlock('text', 'First Name' , 'fname' , $this->album->fname , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Last Name' , 'lname' , $this->album->lname , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Address' , 'address' , $this->album->address , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Address 2' , 'address2' , $this->album->address2 , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'City' , 'city' , $this->album->city , ['class'=>'form-control'],['class'=>'form-group col-md-5']);?>
<?= FH::inputBlock('text', 'State' , 'state' , $this->album->state , ['class'=>'form-control'],['class'=>'form-group col-md-3']);?>
<?= FH::inputBlock('text', 'Zip code' , 'zip' , $this->album->zip , ['class'=>'form-control'],['class'=>'form-group col-md-4']);?>
<?= FH::inputBlock('text', 'Email' , 'email' , $this->album->email , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Cell Phone' , 'cell_phone' , $this->album->cell_phone , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Home Phone' , 'home_phone' , $this->album->home_phone , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<?= FH::inputBlock('text', 'Work Phone' , 'work_phone' , $this->album->work_phone , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
<div class="isa_error_class"><?= FH::displayErrors($this->displayErrors) ?></div>
<div class="col-md2 well text-right">
  <a href="<?=PROOT?>album" class="btn btn-default">Cancel</a>
  <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ; ?>
</div>
</form>
</div>
