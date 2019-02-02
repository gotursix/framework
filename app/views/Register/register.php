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
                                            <div class="icon icon-rose">
                                                <i class="material-icons">time</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Marketing</h4>
                                                <p class="description">
                                                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary">
                                                <i class="material-icons">code</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Fully Coded in HTML5</h4>
                                                <p class="description">
                                                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="material-icons">grup</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Built Audience</h4>
                                                <p class="description">
                                                    There is also a Fully Customizable CMS Admin Dashboard for this product.
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
                                        </div>
                                          <div class="bg-danger"><?= $this->displayErrors ?></div>
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
