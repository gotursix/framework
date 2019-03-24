<?php
use Core\FH;
use Core\H;
 ?>
<?php $this->setSiteTitle('Change name'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="background">

    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-5 mx-auto formerfix ">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 center head-form">
                                <h1>Change name</h1>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <?= FH::csrfInput(); ?>

                                <div class="form-group">
                                    <label>
                                        <h4>First name</h4>
                                    </label>
                                    <input type="text" name="fname" id="fname" class="form-control " placeholder="Enter first name" value="<?=$this->name->fname?>" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <h4>Last name</h4>
                                    </label>
                                    <input type="text" name="lname" id="lname" class="form-control " placeholder="Enter last name" value="<?=$this->name->lname?>" required>
                                </div>

                                <?= FH::displayErrors($this->displayErrors); ?>


                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn-reg btn-block mybtn btn-primary tx-tfm" id="save">Save</button>
                            </div>

                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or ">or</span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 center">
                                <a href="<?=PROOT?>" class="google btn btn-block mybtn" id="cancel">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>
