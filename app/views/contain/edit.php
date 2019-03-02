<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<br><br><br><br><br>

<h1 class="text-center">Add or remove files from the <?=strtoupper($this->contain->name) ?> album</h1>
<?php $this->partial('contain','edit') ?>
<?php $this->end(); ?>
