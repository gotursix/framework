<?php
use Core\H;
use App\Models\Album ;
?>
<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<br><br><br><br><br>
<h1 class="text-center">Add or remove files from the <?= Album::findTitle($this->contain->id); ?> album</h1>

<?php $this->partial('contain','edit') ?>
<?php $this->end(); ?>
