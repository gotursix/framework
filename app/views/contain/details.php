<?php
use App\Models\Users;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container">
    <div class="content">
      <div class="row center">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center formerfix">
            <h2 class="center lg-bg col-md-5 mx-auto ">Album: <font class="album-name"><i><?= $this->album->name ?></i></font></h2>
          <hr>
          <a href="<?=PROOT?>album" class="btn btn-info">Go back</a>
          <a href="<?=PROOT?>contain/edit/<?=$this->album->id?>" class="btn btn-primary">Edit album</a>

          <hr>
          <br>
          <?php if (!$this->contain): ?>
          <div class="container-fluid whitebg">
            <h1 class=" center">There are no files in the album</h1>
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
                    <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                    <div class="caption center">
                      <p><?php echo substr($upload->name, 0 , 25); ?></p>
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
                <div class="col-lg-4 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                  <video class="embed-responsive embed-responsive-16by9" controls>
                    <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
                    Your browser does not support the video tag.
                  </video>
                  <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <?php echo substr($upload->name, 0 , 25); ?>
                    <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                      <?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
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
                <div class="col-lg-4 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                  <audio controls>
                    <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <?php echo substr($upload->name, 0 , 25); ?>
                    <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                      <?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
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
                <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                  <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                    <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                    <?= FH::hoverTag($upload->name , substr($upload->name, 0 , 25));?>
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
      </div>
    </div>
  </div>
<?php endif; ?>
<?php $this->end(); ?>