<?php
use Core\FH;
 ?>
 <div class="container">
<form class="form-row" action=<?= $this->postAction?> method="post">
<?= FH::csrfInput() ?>
<?= FH::inputBlock('text', 'Album Name' , 'name' , $this->album->name , ['class'=>'form-control'],['class'=>'form-group col-md-6']);?>

<select name="format">
  <option value="1">Images</option>
  <option value="2">Video</option>
  <option value="3">Audio</option>
  <option value="3">Documents</option>
</select>

<div class="isa_error_class"><?= FH::displayErrors($this->displayErrors) ?></div>
<div class="col-md2 well text-right">
  <a href="<?=PROOT?>album" class="btn btn-danger btn-xs">Cancel</a>
  <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ; ?>
</div>
</form>
</div>
