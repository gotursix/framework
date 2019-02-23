<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<h2 class="text-center">Edit <?=$this->contact->displayName()?></h2>
<?php $this->partial('contacts','form') ?>

<?php $this->end(); ?>
