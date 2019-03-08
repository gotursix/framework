<?php
use Core\FH;
use Core\H;
 ?>
<?php //H::dnd($this->user); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <div class="background">

      <div class="container">
          <div class="content">
              <div class="row">
        <div class="col-md-5 mx-auto formerfix">
	            <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1>Change your name</h1>
                           </div>
                        </div>
              <form action="" method="post">
                <div class="form-group">
                           <?= FH::csrfInput(); ?>

                           <div class="form-group">
                              <label >First name</label>
                              <input type="text" name="fname" id="fname"  class="form-control noselect"  placeholder="Enter first name" value="<?=$this->name->fname?>" required>
                           </div>
                           <div class="form-group">
                              <label >Last name</label>
                              <input type="text" name="lname" id="lname" class="form-control noselect" placeholder="Enter last name" value="<?=$this->name->lname?>" required>  
                           </div>

                           <?= FH::displayErrors($this->displayErrors); ?>


                       </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Save</button>
                           </div>

                                <div class="col-md-12 ">
                                         <div class="login-or">
                                            <hr class="hr-or">
                                    <span class="span-or noselect">or</span>
                                 </div>
                              </div>
                                      <div class="col-md-12 mb-3 center">
                                        <a href="" class="google btn mybtn">
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
