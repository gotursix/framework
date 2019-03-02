<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<div class="container">
    <br>
    <h1 class="text-center">My images</h1>
    <br>
    <div class="row" id="lightgallery">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                                <hr>
                                <div class="thumbnail text-center">
                                <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
                             </div>
                          <div class="caption text-center">
                        <hr>
                    </div>
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>
</div>
<script> lightGallery(document.getElementById('lightgallery')); </script>
<?php $this->end(); ?>
