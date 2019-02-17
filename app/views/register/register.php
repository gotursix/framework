<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/register.jpeg');  background-size: cover;">
           <div class="full-page register-page" filter-color="black" >
         <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card card-signup">
                            <h2 class="card-title text-center">Register</h2>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="card-content">
                                      <div class="info info-horizontal">
                                          <div class="icon icon-info" style="margin-top:0%;">
                                              <i class="material-icons">E</i>
                                          </div>
                                          <div class="description">
                                              <h4 class="info-title">asy to work</h4>
                                              <p class="description">
                                                  This Framework is easy to work on, because it follows the mvc structure.
                                              </p>
                                          </div>
                                      </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-rose" style="margin-top:0%;">
                                                <i class="material-icons" >C</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">reate albums</h4>
                                                <p class="description">
                                                    Create albums from your photos and videos.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary" style="margin-top:0%;">
                                                <i class="material-icons">O</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">pen source</h4>
                                                <p class="description">
                                                   The code can be found on Github, having presented how to set it up.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                   <div class="social text-center">
                                       <br><br>
                                        <h4>Rufus Framework</h4>
                                    </div>





  <form class="form" action="" method="post">
    <?= FH::csrfInput(); ?>
    <div class="card-content">
    <?= FH::inputBlock('text','First Name', 'fname' , $this->newUser->fname , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::inputBlock('text','Last Name', 'lname' , $this->newUser->lname , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::inputBlock('text','Email', 'email' , $this->newUser->email , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::inputBlock('text','Username', 'username' , $this->newUser->username , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::inputBlock('password','Password', 'password' , $this->newUser->password , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::inputBlock('password','Confirm Password', 'confirm' , $this->newUser->getConfirm() , ['class'=>'form-control input-sm'], ['class'=>'input-group']); ?>
    <?= FH::submitBlock('Register' , ['class' => 'btn btn-primary btn-round'], ['class'=>'footer text-center'])?>
    <?= FH::displayErrors($this->displayErrors); ?>
    </div>
</form>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div></div></div>
</body>
<?php $this->end(); ?>
