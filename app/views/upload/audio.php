<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<div class="container">
    <br>
    <a href="<?=PROOT?>album/create/3" class="btn btn-info" >
      Create album
    </a>
    <h1 class="text-center">My audio files</h1>
    <br>



    <br>
    <div class="row">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3">
                                <hr>
                                <div class="thumbnail text-center">
                                <img src="<?= PROOT . 'img' . DS . 'video.png' ;?>" alt="Thumb-<?=$x?>" class="imgu">
                             </div>
                          <div class="caption text-center">
                            <p><?=$upload->name ?></p>
                        <hr>
                    </div>
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php $this->end(); ?>
