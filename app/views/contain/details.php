<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>
    <div class="background">
<div class="container">
    <div class="row">
        
<h2 class="center col-md-5 mx-auto head-form formerfix">Album: <?= $this->album->name ?></h2>
    </div>
    <div class="row">
<a href="<?=PROOT?>album" class="btn btn-info">Go back</a>
<div id="image-grid" class="container-fluid">
   	  <div class="row whitebg" id="lightgallery">
<?php if ($this->album->format == 1): ?>

   	    <?php $x=1; ?>
        <?php foreach ($this->contain as $upload): ?>
           <?php $dir = Users::currentUser()->id; ?>
    	  <div class="col-lg-3 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                  <a href="#" data-toggle="modal" data-target="#modal-preso" class="img-button">
                       <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" class="img-responsive"/>
    
              <div class="caption text-center">
                <p><?=$upload->name?></p> 
                   </div>
                  </a>               
           </div>
          <?php $x++; ?>
       <?php endforeach; ?>
 <?php endif; ?>



 <?php if ($this->album->format == 2): ?>
      <?php $x=1; ?>
         <?php foreach ($this->contain as $upload): ?>
            <?php $dir = Users::currentUser()->id; ?>
              <div class="col-sm-3">
                    <div class="thumbnail text-center">
                      <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                         
                         <div class="caption text-center">
                              <p><?=$upload->name?></p>

                  </div>
                        </div>
              </div>
           <?php $x++; ?>
        <?php endforeach; ?>
  <?php endif; ?>

  <?php if ($this->album->format == 3): ?>
       <?php $x=1; ?>
          <?php foreach ($this->contain as $upload): ?>
             <?php $dir = Users::currentUser()->id; ?>
               <div class="col-sm-3">
                     <div class="thumbnail text-center">
                       <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                          <div class="caption text-center">
                            <p><?=$upload->name?></p>

                  </div>
                          </div>
                         
               </div>
            <?php $x++; ?>
         <?php endforeach; ?>
   <?php endif; ?>



   <?php if ($this->album->format == 4): ?>
        <?php $x=1; ?>
           <?php foreach ($this->contain as $upload): ?>
              <?php $dir = Users::currentUser()->id; ?>
                <div class="col-sm-3">
                      <div class="thumbnail text-center">
                        <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                             <div class="caption text-center">
                           <p><?=$upload->name?></p>
                               </div>
                           </div>
                        
                   </div>
                </div>
             <?php $x++; ?>
          <?php endforeach; ?>
    <?php endif; ?>
    </div>
    
    <script>var __adobewebfontsappname__="dreamweaver"</script>
   <script> lightGallery(document.getElementById('lightgallery')); </script>

</div>
</div>
        </div>
<?php $this->end(); ?>
