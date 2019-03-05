<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<div class="container">
    <br>
    <a href="<?=PROOT?>album/create/2" class="btn btn-info" >
      Create album
    </a>
    <h1 class="text-center">My videos</h1>
    <br>
    <br>
    <div class="row">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-4">
                                <hr>
                                <div class="thumbnail text-center">

                                  <video width="320" height="190" controls>
                                    <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                    </video>
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
