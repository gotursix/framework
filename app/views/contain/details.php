<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>

<br><br><br><br>
<div class="container">
<h2 class="text-center">Album: <?= $this->album->name ?></h2>

<a href="<?=PROOT?>album" class="btn btn-default">Go back</a>

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
                   <hr>
                </div>
             </div>
          <?php $x++; ?>
       <?php endforeach; ?>
   </div>
 <?php endif; ?>



 <?php if ($this->album->format == 2): ?>
 <div class="row">
      <?php $x=1; ?>
         <?php foreach ($this->contain as $upload): ?>
            <?php $dir = Users::currentUser()->id; ?>
              <div class="col-sm-3">
                  <hr>
                    <div class="thumbnail text-center">
                      <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                         </div>
                         <div class="caption text-center">
                              <p><?=$upload->name?></p>
                    <hr>
                 </div>
              </div>
           <?php $x++; ?>
        <?php endforeach; ?>
    </div>
  <?php endif; ?>



  <?php if ($this->album->format == 3): ?>
  <div class="row">
       <?php $x=1; ?>
          <?php foreach ($this->contain as $upload): ?>
             <?php $dir = Users::currentUser()->id; ?>
               <div class="col-sm-3">
                   <hr>
                     <div class="thumbnail text-center">
                       <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                          </div>
                          <div class="caption text-center">
                            <p><?=$upload->name?></p>

                     <hr>
                  </div>
               </div>
            <?php $x++; ?>
         <?php endforeach; ?>
     </div>
   <?php endif; ?>



   <?php if ($this->album->format == 4): ?>
   <div class="row">
        <?php $x=1; ?>
           <?php foreach ($this->contain as $upload): ?>
              <?php $dir = Users::currentUser()->id; ?>
                <div class="col-sm-3">
                    <hr>
                      <div class="thumbnail text-center">
                        <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                           </div>
                           <div class="caption text-center"
                           <p><?=$upload->name?></p>
                      <hr>
                   </div>
                </div>
             <?php $x++; ?>
          <?php endforeach; ?>
      </div>
    <?php endif; ?>

</div>

<?php $this->end(); ?>
