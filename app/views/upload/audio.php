<?php
use App\Models\Users;
use App\Models\Upload;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container">
    <div class="row">
      <h1 class="center head-form col-md-5 mx-auto formerfix">My audio files</h1>
      <div id="image-grid" class="container-fluid ">
        <div class="whitebg center">
          <hr>
          <a href="<?=PROOT?>upload/add" class="btn btn-info" >
            Upload files
          </a>
          <a href="<?=PROOT?>upload/modify" class="btn btn-danger" >
            Delete files
          </a>
          <a href="<?=PROOT?>album/create/3" class="btn btn-info" >
            Create album
          </a>
          <hr>
          <div class="row">
            <?php $x=1; ?>
            <?php foreach ($this->upload as $upload): ?>
            <?php $dir = Users::currentUser()->id; ?>
            <div class="col-lg-4 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              <audio controls>
                <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <div class="caption center" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    nume de 25 caractere aici
                  <div class="collapse" id="collapseExample<?=$x ?>">
                    rest nume
                  </div>
              </div>

            </div>
            <?php $x++; ?>
            <?php endforeach; ?>
          </div>
          <?php if(!$this->upload): ?>
          <h1 class="center">There are no audio files added.</h1>
          <?php endif;?>
        </div>
      </div>
    </div>
    <script> lightGallery(document.getElementById('lightgallery')); </script>
  </div>
</div>
<?php $this->end(); ?>
