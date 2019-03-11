<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>
    <div class="background">
<div class="container center">
    <div class="row">

<h2 class="center col-md-5 mx-auto head-form formerfix">Album: <font class="album-name"><i><?= $this->album->name ?></font></i></h2>
    </div>
    <div class="whitebg center buttondiv">
        <hr>
        <a href="<?=PROOT?>album" class="btn btn-info">Go back</a>

        <hr>
      </div>
      <br>

      <?php if (!$this->contain): ?>
        <div class="container-fluid whitebg">
        <h1 class="noselect">There are no files in the album</h1>
      </div>
      <?php endif; ?>

      <?php if($this->contain):   ?>

    <div class="row">


<div id="<?php if($this->album->format == 1): ?>image-grid<?php endif; ?> " class="container-fluid">
   	  <div class="row whitebg" id="<?php if($this->album->format == 1): ?>lightgallery<?php endif; ?>">




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
            <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              <video class="embed-responsive embed-responsive-16by9" controls>
                <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
                  Your browser does not support the video tag.
                </video>
                    <div class="caption center">
                       <p><?=$upload->name ?></p>
           </div>
  </div>
           <?php $x++; ?>
        <?php endforeach; ?>
  <?php endif; ?>

  <?php if ($this->album->format == 3): ?>
       <?php $x=1; ?>
          <?php foreach ($this->contain as $upload): ?>
             <?php $dir = Users::currentUser()->id; ?>
             <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">

               <audio controls>
                    <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
                     Your browser does not support the audio element.
                   </audio>
              <div class="caption text-center">
                 <p><?=$upload->name ?></p>
     </div>

   </div>
            <?php $x++; ?>
         <?php endforeach; ?>
   <?php endif; ?>



   <?php if ($this->album->format == 4): ?>
        <?php $x=1; ?>
           <?php foreach ($this->contain as $upload): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                  <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                  <p><?=$upload->name ?></p>
                </a>
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
        <?php endif; ?>
<?php $this->end(); ?>
