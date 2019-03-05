<?php
use Core\FH;
 ?>
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
                              <h1 >Signup</h1>
                           </div>
                        </div>
              <form action="" method="post">
                <div class="form-group">
                           <?= FH::csrfInput(); ?>

                           <?= FH::inputBlock('text','First Name', 'fname' , $this->newUser->fname , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
                           <br>
                           <?= FH::inputBlock('text','Last Name', 'lname' , $this->newUser->lname , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
                           <br>
                           <?= FH::inputBlock('text','Email', 'email' , $this->newUser->email , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
                           <br>
                           <?= FH::inputBlock('text','Username', 'username' , $this->newUser->username , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
                           <br>
                           <?= FH::inputBlock('password','Password', 'password' , $this->newUser->password , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
                           <br>
                           <?= FH::inputBlock('password','Confirm Password', 'confirm' , $this->newUser->getConfirm() , ['class'=>'form-control input-sm '], ['class'=>'input-group ']); ?>
                          <br>
                           <?= FH::displayErrors($this->displayErrors); ?>
                       </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                           </div>

                                <div class="col-md-12 ">
                                         <div class="login-or">
                                            <hr class="hr-or">
                                    <span class="span-or">or</span>
                                 </div>
                              </div>
                                      <div class="col-md-12 mb-3 center">
                                        <a href="<?=PROOT?>register/login" class="google btn mybtn">
                                        Login here
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
