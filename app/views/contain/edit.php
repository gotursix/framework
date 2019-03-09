<?php
use Core\H;
use App\Models\Album ;
use App\Models\Users ;
use App\Models\Contain ;
use Core\FH ;
?>
<?php $this->setSiteTitle('Edit Album'); ?>
<?php $this->start('body'); ?>

<div class="background">


<div class="container">
    <div class="row center">
<h1 class=" head-form col-md-5 mx-auto formerfix">Edit <?= $this->album->name ?></h1>
    </div>
                <h2 class="head-form col-md-5 mx-auto formerfix center">Already in album</h2>
        <div id="image-grid" class="container-fluid ">
            <div class="whitebg center">
                  <hr>
        <a href="<?=PROOT?>album" class="btn btn-primary ">Save </a>
          <hr>
  <div class="row">
     <?php if ($this->album->format == 1): ?>
            <?php $x=1; ?>
               <?php foreach ($this->contain as $upload): ?>
                  <?php $dir = Users::currentUser()->id; ?>
                     <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">


                              <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                               <br>
                              <a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>

                    </div>
                 <?php $x++; ?>
              <?php endforeach; ?>
      <?php endif; ?>

       <?php if ($this->album->format == 2): ?>
              <?php $x=1; ?>
                 <?php foreach ($this->contain as $upload): ?>
                    <?php $dir = Users::currentUser()->id; ?>
                       <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'video.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">

                    <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
    <br>
                               <a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>

                      </div>
                   <?php $x++; ?>
                <?php endforeach; ?>
         <?php endif; ?>


         <?php if ($this->album->format == 3): ?>
                <?php $x=1; ?>
                   <?php foreach ($this->contain as $upload): ?>
                      <?php $dir = Users::currentUser()->id; ?>
                         <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'video.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                                  <br>
                                 <a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>

                        </div>
                     <?php $x++; ?>
                  <?php endforeach; ?>
           <?php endif; ?>



           <?php if ($this->album->format == 4): ?>
                  <?php $x=1; ?>
                     <?php foreach ($this->contain as $upload): ?>
                        <?php $dir = Users::currentUser()->id; ?>
                           <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'document.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
        <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                                  <br>
                                   <a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>

                          </div>
                       <?php $x++; ?>
                    <?php endforeach; ?>
             <?php endif; ?>

                </div>

              </div>


              <h2 class="head-form col-md-5 mx-auto formerfix center">Add to album</h2>
  <div class="whitebg center">

<div class="row" >
    <?php if ($this->album->format == 1): ?>
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                             <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                          <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                          <br>
                              <a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>

                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
  <?php endif; ?>


  <?php if ($this->album->format == 2): ?>
                <?php $x=1; ?>
                    <?php foreach ($this->upload as $upload): ?>
                       <?php $dir = Users::currentUser()->id; ?>
                           <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'video.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                     <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                        <br>
                            <a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>

                </div>
          <?php $x++; ?>
      <?php endforeach; ?>
<?php endif; ?>



<?php if ($this->album->format == 3): ?>
        <?php $x=1; ?>
            <?php foreach ($this->upload as $upload): ?>
               <?php $dir = Users::currentUser()->id; ?>
                   <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'video.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                     <p>ceva</p>
             <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />

               <br>
                  <a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
          </a>
        </div>
  <?php $x++; ?>
<?php endforeach; ?>
<?php endif; ?>




<?php if ($this->album->format == 4): ?>
        <?php $x=1; ?>
            <?php foreach ($this->upload as $upload): ?>
               <?php $dir = Users::currentUser()->id; ?>
                   <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'img' . DS . 'document.png' ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                     <p>ceva</p>s

    <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />

               <br>
                  <a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
    </a>
        </div>
  <?php $x++; ?>
<?php endforeach; ?>
<?php endif; ?>
            </div>
</div>
</div>
</div>
<br>
</div>


<?php $this->end(); ?>
