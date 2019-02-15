<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/login.jpeg'); background-size: cover; ">
        <div class="full-page login-page" filter-color="black" >
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                          <form action="<?=PROOT?>register/login" method="post">
                            <?= FH::csrfInput() ?>
                                <div class="card card-login">
                                    <div class="card-header text-center" data-background-color="rose">
                                        <h3 class="card-title">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            </span>

                                            <div class="form-group label-floating" style="width:100%;">
                                                <label class="control-label"><h4>Username</h4></label>
                                                <br>
                                                <input type="text" name="username" id="username" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            </span>
                                            <div class="form-group label-floating" style="width:100%;">
                                                <label class="control-label"><h4>Password</h4></label>
                                                <br>
                                                <input type="password" name="password" id="password" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                       <label class="control-label"> <h4 class="reset-button">Remember me <input type="checkbox" id="remember_me" name="remember_me" value="on"></h4></label>
                                    </div>

                                    <div class="isa_error_class">
                                      <?=$this->displayErrors ?>
                                    </div>

                                      <br>

                                      <div class="footer text-center  style=" style="padding-bottom: 30px;">
                                        <button type="submit" class="btn btn-primary btn-wd btn-lg" data-background-color="rose">Login</button>
                                    </div>

                                    <div class="footer text-center">
                                    <a href="<?=PROOT?>register/register"  class="btn btn-light" data-background-color="rose">Register</a>
                                </div>

                                <div class="footer text-center">
                                   <label class="control-label reset-button"><h4><a href="<?=PROOT?>register/register" class="reset-button">Reset password</a></h4></label>
                            </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->end(); ?>
