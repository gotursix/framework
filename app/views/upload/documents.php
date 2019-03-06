<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<div class="background">
<div class="container">
    <div class="row">
    <h1 class="center head-form col-md-5 mx-auto formerfix">My documents</h1>
    </div>
    <div class="row">
  <a href="<?=PROOT?>album/create/4" class="btn btn-info" >
      Create album
    </a>
    <div class="row whitebg">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3" >
                                <div class="thumbnail text-center">
                                  <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                                <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" style="max-height: 200px; max-width:200px;">
                                 <div class="caption text-center">
                            <p><?=$upload->name ?></p>
                    </div>
                                    </a>
                             </div>
                       
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
</div>
    </div>
    </div>
<?php $this->end(); ?>
