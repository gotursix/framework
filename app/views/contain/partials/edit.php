<?php
use Core\FH;
use App\Models\Album;
 ?>
 <div class="container">
<form class="form-row" action=<?= $this->postAction?> method="post">
<?= FH::csrfInput() ?>

<div class="isa_error_class"><?= FH::displayErrors($this->displayErrors) ?></div>
<div class="col-md2 well text-right">
  <a href="<?=PROOT?>album" class="btn btn-default">Cancel</a>
  <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ; ?>
</div>
</form>
</div>
