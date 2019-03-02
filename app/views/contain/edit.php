<?php
use Core\H;
use App\Models\Album ;
use App\Models\Users ;
?>
<?php $this->setSiteTitle('Edit Album'); ?>
<?php $this->start('body'); ?>
<br><br><br><br><br>
<div class="container">
<h1 class="text-center">Add or remove files from the  album <?= $this->album->name ?></h1>

    <br>
    <div class="row">
                  <?php $x=1; ?>
                      <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                            <div class="col-sm-3"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                                <hr>
                                <input type="checkbox" name="language[]" value="<?= $upload->name?>" />

                                <div class="thumbnail text-center">
                                <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
                             </div>
                          <div class="caption text-center">
                            <p><?=$upload->name?></p>
                        <hr>
                    </div>
                  </div>
            <?php $x++; ?>
        <?php endforeach; ?>
    </div>


</div>

<?php $this->partial('contain','edit') ?>
<?php $this->end(); ?>
