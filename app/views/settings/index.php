<?php
use App\Models\Users;
use Core\Session;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background ">

  <br><br>
  <br><br>
  <div class="container center">
    <div class="content alert-fix">
      <?= Session::displayMsg() ?>
    </div>
  </div>

  <div class="container">
    <div class="content">
      <div class="row">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center ">
            <h1 class="center lg-bg col-md-5 mx-auto">Deleted  images</h1>
            <hr>
            <a href="<?=PROOT?>upload/modify" class="btn btn-danger">
              Delete all images
            </a>
            <hr>
            <div class="row" id="lightgallery">
              <?php $x=1; ?>
              <?php foreach ($this->settings as $settings): ?>
              <?php if($settings->format == 1): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-3 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                <img src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                <div class="caption center">
                  <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <?php echo substr($settings->name, 0 , 25); ?>
                    <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                      <?php if(strlen($settings->name)>25) echo substr($settings->name, -strlen($settings->name)+25 , strlen($settings->name)); ?>
                    </div>
                  </div>
                  <br>
                  <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">
                    Delete
                  </a>
                  <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" >
                    Restore
                  </a>
                </div>
              </div>
              <?php $x++; ?>
              <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <?php if(!$this->settings): ?>
            <h1 class="center">There are no images deleted.</h1>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="content">
      <div class="row">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center formerfix">
            <h1 class="center lg-bg col-md-5 mx-auto ">Deleted  videos</h1>
            <hr>
            <a href="<?=PROOT?>upload/modify" class="btn btn-danger">
              Delete all videos
            </a>
            <hr>
            <div class="row">
              <?php $x=1; ?>
              <?php foreach ($this->settings as $settings): ?>
              <?php if($settings->format == 2): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-4 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                <video class="embed-responsive embed-responsive-16by9" controls>
                  <source src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
                  Your browser does not support the video tag.
                </video>
                <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo substr($settings->name, 0 , 25); ?>
                  <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                    <?php if(strlen($settings->name)>25) echo substr($settings->name, -strlen($settings->name)+25 , strlen($settings->name)); ?>
                  </div>
                </div>
                <br>
                <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">
                  Delete
                </a>
                <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" >
                  Restore
                </a>
              </div>
              <?php endif;?>
              <?php $x++; ?>
              <?php endforeach; ?>
            </div>
            <?php if(!$this->settings): ?>
            <h1 class="center">There are no videos deleted.</h1>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content">
      <div class="row">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center formerfix">
            <h1 class="center lg-bg col-md-5 mx-auto ">Deleted  audios</h1>
            <hr>
            <a href="<?=PROOT?>upload/modify" class="btn btn-danger" >
              Delete all audio files
            </a>
            <hr>
            <div class="row">
              <?php $x=1; ?>
              <?php foreach ($this->settings as $settings): ?>
              <?php if($settings->format == 3): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-4 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                <audio controls>
                  <source src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo substr($settings->name, 0 , 25); ?>
                  <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                    <?php if(strlen($settings->name)>25) echo substr($settings->name, -strlen($settings->name)+25 , strlen($settings->name)); ?>
                  </div>
                </div>
                <br>
                <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">
                  Delete
                </a>
                <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" >
                  Restore
                </a>
              </div>
              <?php $x++; ?>
              <?php endif;?>
              <?php endforeach; ?>
            </div>
            <?php if(!$this->settings): ?>
            <h1 class="center">There are no audio files deleted.</h1>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content">
      <div class="row">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center formerfix">
            <h1 class="center lg-bg col-md-5 mx-auto ">Deleted  documents</h1>
            <hr>
            <a href="<?=PROOT?>upload/modify" class="btn btn-danger" >
              Delete all documents
            </a>
            <hr>
            <div class="row">
              <?php $x=1; ?>
              <?php foreach ($this->settings as $sttings): ?>
              <?php if($sttings->format == 4): ?>
              <?php $dir = Users::currentUser()->id; ?>
              <div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $sttings->name ;?>" data-sub-html="<h4><?=$sttings->name ?></h4>">
                <a href="<?= PROOT . 'files' . DS . $dir  . DS . $sttings->name ;?>" target="_blank">
                  <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                  <?= FH::hoverTag($sttings->name , substr($sttings->name, 0 , 25));?>
                </a>
                <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">
                  Delete
                </a>
                <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" >
                  Restore
                </a>
              </div>
              <?php endif;?>
              <?php $x++; ?>
              <?php endforeach; ?>
            </div>
            <?php if(!$this->settings): ?>
            <h1 class="center">There are no documents deleted.</h1>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
<script>
var $rows = $('#table tr');
$('#search').keyup(function()
{
var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
reg = RegExp(val, 'i'),
text;
$rows.show().filter(function()
{
text = $(this).text().replace(/\s+/g, ' ');
return !reg.test(text);
}).hide();
});
</script>
<?php $this->end(); ?>