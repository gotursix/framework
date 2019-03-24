<?php
use App\Models\Users;
use Core\Session;
use Core\FH;
?>
<?php $this->setSiteTitle('Recycle bin'); ?>
<?php $this->start('body'); ?>
<div class="background ">
    <br><br>
    <br><br>
    <div class="container center">
        <div class="content alert-fix">
            <?= Session::displayMsg() ?>
        </div>
    </div>

    <?php if(FH::number($this->settings , 1)>0):  ?>
    <div class="container">
        <div class="content">
            <div class="row">
                <div id="image-grid" class="container-fluid ">
                    <div class="whitebg center">
                        <h1 class="center lg-bg col-md-5 mx-auto">Deleted images</h1>
                        <hr>
                        <a href="<?=PROOT?>settings/restoreall/1" class="btn-reg btn-primary" id="restore-all">
                            Restore all images
                        </a>
                        <a href="<?=PROOT?>settings/deleteall/1" class="btn btn-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover them.')){return false;}" id="delete-all">
                            Delete all images
                        </a>
                        <hr>
                        <div class="row" id="lightgallerym">
                            <?php $x=1; ?>
                            <?php foreach ($this->settings as $settings): ?>
                            <?php if($settings->format == 1): ?>
                            <?php $dir = Users::currentUser()->id; ?>

                            <?php if(FH::number($this->settings , 1) >=4):  ?>
                            <div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                <?php endif;?>
                                <?php if(FH::number($this->settings , 1) == 3):  ?>
                                <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                    <?php endif;?>
                                    <?php if(FH::number($this->settings , 1) == 2):  ?>
                                    <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                        <?php endif;?>
                                        <?php if(FH::number($this->settings , 1) == 1):  ?>
                                        <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                            <?php endif;?>

                                            <img src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                                            <div class="caption center">
                                                <div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <?php echo substr($settings->name, 0 , 25); ?>
                                                    <div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
                                                        <?php if(strlen($settings->name)>25) echo substr($settings->name, -strlen($settings->name)+25 , strlen($settings->name)); ?>
                                                    </div>
                                                </div>

                                                <?php if(FH::number($this->settings , 1) == 1):  ?>
                                                <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}" id="delete">
                                                    Delete
                                                </a>

                                                <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn-reg btn-primary btn-xs table-fix" id="restore">
                                                    Restore
                                                </a>
                                                <?php endif;?>


                                                <?php if(FH::number($this->settings , 1) > 1):  ?>
                                                <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}" id="delete">
                                                    Delete
                                                </a>
                                                <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn-reg btn-primary btn-xs table-fix" id="restore">
                                                    Restore
                                                </a>
                                                <?php endif;?>
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
                <?php endif; ?>

                <?php if(FH::number($this->settings , 2)>0):  ?>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div id="image-grid" class="container-fluid ">
                                <div class="whitebg center <?php if(FH::number($this->settings , 1)>0):  ?>formerfix<?php endif;?>">
                                    <h1 class="center lg-bg col-md-5 mx-auto ">Deleted videos</h1>
                                    <hr>
                                    <a href="<?=PROOT?>settings/restoreall/2" class="btn btn-primary" id="restre-all">
                                        Restore all videos
                                    </a>
                                    <a href="<?=PROOT?>settings/deleteall/2" class="btn btn-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover them.')){return false;}" id="delete-all">
                                        Delete all videos
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <?php $x=1; ?>
                                        <?php foreach ($this->settings as $settings): ?>
                                        <?php if($settings->format == 2): ?>
                                        <?php $dir = Users::currentUser()->id; ?>
                                        <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
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
                                            <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}" id="delete">
                                                Delete
                                            </a>
                                            <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" id="restore">
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
                <?php endif; ?>
                <?php if(FH::number($this->settings , 3)>0):  ?>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div id="image-grid" class="container-fluid ">
                                <div class="whitebg center <?php if(FH::number($this->settings , 2)+FH::number($this->settings , 1)>0):  ?>formerfix<?php endif;?>">
                                    <h1 class="center lg-bg col-md-5 mx-auto ">Deleted audios</h1>
                                    <hr>
                                    <a href="<?=PROOT?>settings/restoreall/3" class="btn btn-primary" id="restore-all">
                                        Restore all audios
                                    </a>
                                    <a href="<?=PROOT?>settings/deleteall/3" class="btn btn-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover them.')){return false;}" id="delete-all">
                                        Delete all audio files
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <?php $x=1; ?>
                                        <?php foreach ($this->settings as $settings): ?>
                                        <?php if($settings->format == 3): ?>
                                        <?php $dir = Users::currentUser()->id; ?>
                                        <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
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
                                            <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}" id="delete">
                                                Delete
                                            </a>
                                            <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" id="restore">
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
                <?php endif; ?>
                <?php if(FH::number($this->settings , 4)>0):  ?>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div id="image-grid" class="container-fluid ">
                                <div class="whitebg center <?php if(FH::number($this->settings , 3)+FH::number($this->settings , 2)+FH::number($this->settings , 1)>0):  ?>formerfix<?php endif;?>">
                                    <h1 class="center lg-bg col-md-5 mx-auto ">Deleted documents</h1>
                                    <hr>
                                    <a href="<?=PROOT?>settings/restoreall/4" class="btn btn-primary" id="restore-all">
                                        Restore all documents
                                    </a>
                                    <a href="<?=PROOT?>settings/deleteall/4" class="btn btn-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover them.')){return false;}" id="delete-all">
                                        Delete all documents
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <?php $x=1; ?>
                                        <?php foreach ($this->settings as $settings): ?>
                                        <?php if($settings->format == 4): ?>
                                        <?php $dir = Users::currentUser()->id; ?>

                                        <?php if(FH::number($this->settings , 4) >=4):  ?>
                                        <div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                            <?php endif;?>
                                            <?php if(FH::number($this->settings , 4) == 3):  ?>
                                            <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                                <?php endif;?>
                                                <?php if(FH::number($this->settings , 4) == 2):  ?>
                                                <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                                    <?php endif;?>
                                                    <?php if(FH::number($this->settings , 4) == 1):  ?>
                                                    <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" data-sub-html="<h4><?=$settings->name ?></h4>">
                                                        <?php endif;?>

                                                        <a href="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" target="_blank">
                                                            <img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
                                                            <?=substr($settings->name, 0 , 25);?>
                                                            <br>
                                                        </a>
                                                        <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs restore-btn" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}" id="delete">
                                                            Delete
                                                        </a>
                                                        <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs table-fix" id="restore">
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
                            <?php endif;?>
                            <?php if(FH::number($this->settings , 1)+FH::number($this->settings , 2)+FH::number($this->settings , 3)+FH::number($this->settings , 4)==0):  ?>
                            <div class="container">
                                <div class="content">
                                    <div class="row">
                                        <div id="image-grid" class="container-fluid ">
                                            <div class="whitebg center <?php if(FH::number($this->settings , 4)>0):  ?>formerfix<?php endif;?>">
                                                <h1 class="center lg-bg col-md-5 mx-auto ">Recycle bin</h1>
                                                <hr>
                                                <a href="<?=PROOT?>upload/modify" class="btn btn-danger" id="delete">
                                                    Delete files
                                                </a>
                                                <hr><br>
                                                <h1 class="center">You have no files in the recycle bin.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif;?>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var $rows = $('#table tr');
                $('#search').keyup(function() {
                    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                        reg = RegExp(val, 'i'),
                        text;
                    $rows.show().filter(function() {
                        text = $(this).text().replace(/\s+/g, ' ');
                        return !reg.test(text);
                    }).hide();
                });

            </script>
            <?php $this->end(); ?>
