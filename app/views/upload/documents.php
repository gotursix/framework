<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<div class="container">
    <br>
    <a href="<?=PROOT?>album/create/4" class="btn btn-info" >
      Create album
    </a>
    <h1 class="text-center">My documents</h1>
    <br>

    <br>
    <div class="row">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3" >
                                <hr>
                                <div class="thumbnail text-center">
                                  <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                                <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" style="max-height: 200px; max-width:200px;">
                              </a>
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
