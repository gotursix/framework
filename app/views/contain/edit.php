<?php
use Core\H;
use App\Models\Album ;
use App\Models\Users ;
use App\Models\Contain ;
use Core\FH ;
?>
<?php $this->setSiteTitle('Edit Album'); ?>
<?php $this->start('body'); ?>

<br><br><br><br><br>


<div class="container">
<h1 class="text-center">Add or remove files from the  album <?= $this->album->name ?></h1>
    <br>
     <h2 class="text-left">Already in album</h2>


     <?php if ($this->album->format == 1): ?>
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
                             <p><?=$upload->name?></p>
                             <a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>
                          <hr>
                       </div>
                    </div>
                 <?php $x++; ?>
              <?php endforeach; ?>
          </div>
      <?php endif; ?>




          <div class="col-md2 well text-leftt">
            <a href="<?=PROOT?>album" class="btn btn-primary">Save </a>
          </div>
          <br>


    <h2 class="text-left">Add to album</h2>

    <?php if ($this->album->format == 1): ?>
        <div class="row">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3">
                                <hr>
                                <div class="thumbnail text-center">
                                <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
                             </div>
                          <div class="caption text-center">
                            <p><?=$upload->name?></p>
                              <a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
                        <hr>
                    </div>
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
  <?php endif; ?>



</div>
<?php $this->end(); ?>
