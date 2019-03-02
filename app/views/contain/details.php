<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>

<br><br><br><br>
<div class="container">
<h2 class="text-center">Album: <?= $this->album->name ?></h2>

<a href="<?=PROOT?>album" class="btn btn-default">Go back</a>

<div class="row">
     <?php $x=1; ?>
        <?php foreach ($this->contain as $upload): ?>
           <?php $dir = Users::currentUser()->id; ?>
             <div class="col-sm-3">
                 <hr>
                   <div class="thumbnail text-center">
                       <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
                        </div>
                        <div class="caption text-center">
                   <hr>
                </div>
             </div>
          <?php $x++; ?>
       <?php endforeach; ?>
   </div>

</div>

<?php $this->end(); ?>
