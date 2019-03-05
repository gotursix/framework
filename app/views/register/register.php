<?php
use Core\FH;
 ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/register.jpeg');  background-size: cover;">
         <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card card-signup">
                            <h2 class="card-title text-center">Register</h2>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="card-content">
                                      <div class="info info-horizontal">
                                          <div class="icon icon-info padding-text">
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
                                            <div class="icon icon-rose padding-text2">
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
                                            <div class="icon icon-primary padding-text3">
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
    <?= FH::inputBlock('password','Confirm Password', 'confirm' , $this->newUser->getConfirm() , ['class'=>'form-control input-sm '], ['class'=>'input-group ']); ?>
    <?= FH::submitBlock('Register' , ['class' => 'btn btn-wd btn-lg margin-buttom-register' , 'data-background-color'=>"rose"], ['class'=>'footer text-center'])?>
    <?= FH::displayErrors($this->displayErrors); ?>
    </div>
</form>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div></div></div>
			       <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			  <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
                        </form>
                     </div>
			</div>
		</div>
<?php $this->end(); ?>
