<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/register.jpeg') ">
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
                                          <div class="icon icon-info"   style="margin-top: -0%;">
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
                                            <div class="icon icon-rose">
                                                <i class="material-icons" style="margin-top: -1 %;">C</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">reate albums</h4>
                                                <p class="description">
                                                    Create albums from your photos and videos.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary">
                                                <i class="material-icons" style="margin-top: -1%;">O</i>
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

                                        <div class="card-content">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                  <input type="text" id="fname" name="fname" class="form-control" value="<?=$this->post['fname']?>" placeholder="First name">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                <input type="text" id="lname" name="lname" class="form-control" value="<?=$this->post['lname']?>" placeholder="Last name">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                <input type="email" id="email" name="email" class="form-control" value="<?=$this->post['email']?>" placeholder="Email">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                <input type="text" id="username" name="username" class="form-control" value="<?=$this->post['username']?>" placeholder="Username">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                <input type="password" id="password" name="password" class="form-control" value="<?=$this->post['password']?>" placeholder="Password">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                </span>
                                                <input type="password" id="confirm" name="confirm" class="form-control" value="<?=$this->post['confirm']?>" placeholder="Confirm Password">
                                            </div>
                                                <br><br>    <br><br>    <br><br>    <br><br>        <br><br>
                                                  <div ><?= $this->displayErrors ?></div>
                                        </div>




                                        <div class="footer text-center">
                                              <input type="submit" class="btn btn-primary btn-round" value="Register">
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
