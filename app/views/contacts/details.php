<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('body'); ?>

<a href="<?=PROOT?>contacts" class="btn">Back</a>

<h2 class="text-center"><?=$this->contact->displayName()?></h2>
<div class="col-md-6">
  <p><span class="font-weight-bold">Email : </span><?=$this->contact->email ?></p>
  <p><span class="font-weight-bold">Cell Phone : </span><?=$this->contact->cell_phone ?></p>
  <p><span class="font-weight-bold">Home Phone : </span><?=$this->contact->home_phone ?></p>
  <p><span class="font-weight-bold">Work Phone : </span><?=$this->contact->work_phone ?></p>
</div>
<div class="col-md-6">
    <?= $this->contact->displayAddressLabel() ?>
</div>


<?php $this->end(); ?>
