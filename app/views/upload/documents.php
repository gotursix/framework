<?php
use App\Models\Users;
use App\Models\Upload;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container"><div class="content">
    <div class="row">

      <div id="image-grid" class="container-fluid ">

        <div class="whitebg center formerfix">
<h1 class="center lg-bg col-md-5 mx-auto">My documents</h1>
          <hr>
          <a href="<?=PROOT?>upload/add" class="btn btn-info" >
            Upload files
          </a>
          <a href="<?=PROOT?>upload/modify" class="btn btn-danger" >
            Delete files
          </a>
          <a href="<?=PROOT?>album/create/4" class="btn btn-info" >
            Create album
          </a>
          <hr>
          <div class="row">
            <?php $x=1; ?>
            <?php foreach ($this->upload as $upload): ?>
            <?php $dir = Users::currentUser()->id; ?>
            <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                <div class="caption center" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                      nume de 25 caractere aici
                    <div class="collapse" id="collapseExample<?=$x ?>">
                      rest nume
                    </div>
                </div>
              </a>
            </div>
            <?php $x++; ?>
            <?php endforeach; ?>
          </div>
          <?php if(!$this->upload): ?>
          <h1 class="center">There are no documents added.</h1>
          <?php endif;?>
        </div>
      </div>
    </div>
    <script> lightGallery(document.getElementById('lightgallery')); </script>
  </div>
</div>
<?php $this->end(); ?>
