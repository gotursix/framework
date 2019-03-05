<?php
use Core\FH;
 ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <form action="<?=PROOT?>register/login" method="post">
      <?= FH::csrfInput() ?>
    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/login.jpeg'); background-size: cover; ">
                <div class="content">
    <div class="container">
        <div class="row">


			<div class="col-md-5 mx-auto">
      <br>
      <br>
      <br>
      <br>
      <br>
                <div class="card card-login">

				<div class="myform form text-center">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
               <br>
							<h1>Login</h1>
            <br>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" name="username" id="username"  class="form-control"  placeholder="Enter username">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password" class="form-control" value="">
                           </div>
                           <div class="form-group">
                              <label class="control-label"> <h4 class="reset-button">Remember me <input type="checkbox" id="remember_me" name="remember_me" value="on"></h4></label>
                           </div>


                           <div class="isa_error_class">
                             <?= FH::displayErrors($this->displayErrors)?>
                           </div>

                           <div class="col-md-12 text-center">
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
                                 <a href="register/register" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Sign up here
                                 </a>
                              </p>
                           </div>

				</div>
			</div>
			</div>
		</div>
        </div>
        </div>
        </div>
      </form>

<?php $this->end(); ?>
