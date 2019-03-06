<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<div class="background">
<div class="container">
   <div class="row">
    <h1 class="center head-form col-md-5 mx-auto formerfix">My audio files</h1>
    </div>
    <div class="row">
    <a href="<?=PROOT?>album/create/3" class="btn btn-info" >
      Create album
    </a>
    <div class="row whitebg">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3">
                                <div class="thumbnail text-center">
                                <audio controls>
                                     <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
                                      Your browser does not support the audio element.
                                    </audio>
                                     <div class="caption text-center">
                            <p><?=$upload->name ?></p>
                    </div>
                             </div>
                         
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
</div>
    </div>
    </div>
<?php $this->end(); ?>
