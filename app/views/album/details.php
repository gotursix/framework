<?php $this->setSiteTitle($this->album->displayName()); ?>
<?php $this->start('body'); ?>

<a href="<?=PROOT?>albums" class="btn">Back</a>
<br><br><br><br>
<div class="container">
<h2 class="text-center"><?=$this->album->displayName()?></h2>
<div class="col-md-6">
  <p><span class="font-weight-bold">Email : </span><?=$this->album->email ?></p>
  <p><span class="font-weight-bold">Cell Phone : </span><?=$this->album->cell_phone ?></p>
  <p><span class="font-weight-bold">Home Phone : </span><?=$this->album->home_phone ?></p>
  <p><span class="font-weight-bold">Work Phone : </span><?=$this->album->work_phone ?></p>
</div>
<div class="col-md-6">
    <?= $this->album->displayAddressLabel() ?>
</div>
</div>


<?php $this->end(); ?>
