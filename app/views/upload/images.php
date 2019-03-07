<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<div class="background">
    <div class="container">

        <div class="row">
          <h1 class="center head-form col-md-5 mx-auto formerfix">My images</h1>


    <div id="image-grid" class="container-fluid ">

      <div class="whitebg center">
          <hr>
          <a href="<?=PROOT?>album/create/1" class="btn btn-info" >
          Create album
        </a>
        <a href="<?=PROOT?>upload/modify" class="btn btn-danger" >
          Delete files
        </a>

          <hr>
    <div class="row" id="lightgallery">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                                                      <a href="#" data-toggle="modal" data-target="#modal-preso" class="img-button">
                                <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                             <div class="caption text-center">
                                <p><?=$upload->name ?></p>
                    </div>
                                    </a>
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
    <?php if(!$this->upload): ?>
      <h1 class="center">There are no images added.</h2>
    <?php endif;?>
  </div>
</div>
</div>
<script> lightGallery(document.getElementById('lightgallery')); </script>
    </div>
    </div>
<?php $this->end(); ?>
