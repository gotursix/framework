<?php
use App\Models\Users;
use App\Models\Upload;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container">

    <div class="content">
      <div class="row">

        <div id="image-grid" class="container-fluid ">

          <div class="whitebg center formerfix">
            <h1 class="center lg-bg col-md-5 mx-auto noselect">My videos</h1>
            <hr>
            <a href="<?=PROOT?>upload/add" class="btn btn-info">
              Upload files
            </a>
            <a href="<?=PROOT?>upload/modify" class="btn btn-danger">
              Delete files
            </a>
            <a href="<?=PROOT?>album/create/2" class="btn btn-info">
              Create album
            </a>
            <hr>
            <div class="row">
              <?php $x=1; ?>
              <?php foreach ($this->upload as $upload): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-3 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                <video class="embed-responsive embed-responsive-16by9" controls>
                  <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
                  Your browser does not support the video tag.
                </video>
                <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo substr($upload->name, 0 , 25); ?>

                  <div class="collapse word-break margin-file" id="collapseExample<?=$x ?>">
                    <?php echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)-25);  ?>
                  </div>
                </div>
              </div>
              <?php $x++; ?>
              <?php endforeach; ?>
            </div>
            <?php if(!$this->upload): ?>
            <h1 class="center">There are no videos added.</h1>
            <?php endif;?>
          </div>
        </div>
      </div>
      <?php $this->end(); ?>
