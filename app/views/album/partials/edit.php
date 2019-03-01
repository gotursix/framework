<?php
use Core\FH;
 ?>
 <div class="container">
<form class="form-row" action=<?= $this->postAction?> method="post">
<?= FH::csrfInput() ?>
<?= FH::inputBlock('text', 'Album Name' , 'name' , $this->album->name , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>


<div class="isa_error_class"><?= FH::displayErrors($this->displayErrors) ?></div>
<div class="col-md2 well text-right">
  <a href="<?=PROOT?>album" class="btn btn-default">Cancel</a>
  <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ; ?>
</div>
</form>
</div>
