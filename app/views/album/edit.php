<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<br><br><br><br>

<h2 class="text-center">Edit <?=$this->album->displayName()?></h2>
<?php $this->partial('album','form') ?>

<?php $this->end(); ?>
