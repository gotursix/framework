<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<br><br><br><br>

<h2 class="text-center">Edit <?=$this->album->name ?></h2>
<?php $this->partial('album','edit') ?>

<?php $this->end(); ?>
