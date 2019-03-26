<?php
use App\Models\Users;
use App\Models\Upload;
use Core\FH;
?>
<?php $this->setSiteTitle('My documents'); ?>
<?php $this->start('body'); ?>
<div class="background">
    <div class="container">
        <div class="content">
            <div class="row">
                <div id="image-grid" class="container-fluid ">
                    <div class="whitebg center formerfix">
                        <h1 class="center lg-bg col-md-5 mx-auto ">My documents</h1>
                        <hr>
                        <a href="<?=PROOT?>upload/add" class="btn btn-info" id="upload">
                            Upload files
                        </a>
                        <a href="<?=PROOT?>upload/modify" class="btn btn-danger" id="delete">
                            Delete files
                        </a>
                        <a href="<?=PROOT?>album/create/1" class="btn btn-info" id="create">
                            Create album
                        </a>
                        <hr>
                        <div class="row">
                            <?php $x=1; ?>
                            <?php foreach ($this->upload as $upload): ?>
                            <?php $dir = Users::currentUser()->id; ?>

                            <?php if(FH::number($this->upload , 4) >=4):  ?>
                            <div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
                                <?php endif;?>
                                <?php if(FH::number($this->upload , 4) == 3):  ?>
                                <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
                                    <?php endif;?>
                                    <?php if(FH::number($this->upload , 4) == 2):  ?>
                                    <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
                                        <?php endif;?>
                                        <?php if(FH::number($this->upload , 4) == 1):  ?>
                                        <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
                                            <?php endif;?>

                                            <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
                                                <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" /></a>
                                            <?= substr($upload->name, 0 , 25);?>
                                        </div>
                                        <?php $x++; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php if(!$this->upload): ?>
                                    <h1 class="center">There are no documents added.</h1>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <script>
                            lightGallery(document.getElementById('lightgallery'));

                        </script>
                    </div>
                </div>
            </div>
            <?php $this->end(); ?>
