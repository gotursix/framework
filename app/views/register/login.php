<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Login'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="background">
	<form action="<?=PROOT?>register/login" method="post">
		<?= FH::csrfInput() ?>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-5 mx-auto formerfix">
						<div class="myform form">
							
							<div class="logo mb-3">
								
								<div class="col-md-12 center head-form ">
									
									<h1>Login</h1>
									
								</div>
								
							</div>
							
							<form action="" method="post" name="login">
								
								<div class="form-group">
									
									<label >Username</label>
									<input type="text" name="username" id="username"  class="form-control "  placeholder="Enter username">
									
								</div>
								
								<div class="form-group">
									
									<label >Password</label>
									<input type="password" name="password" id="password" class="form-control " placeholder="Enter password">
									
								</div>
								
								<div class="form-group">
									
									<label class="control-label"> <h4 class="reset-button">Remember me <input type="checkbox" id="remember_me" name="remember_me" value="on"></h4></label>
									
								</div>
								<?= FH::displayErrors($this->displayErrors)?>
								<div class="col-md-12 text-center mb-3">
									
									<button type="submit" class=" btn-reg btn-block mybtn btn-primary tx-tfm">Login</button>
									
								</div>
								<div class="col-md-12 ">
									
									<div class="login-or">
										
										<hr class="hr-or">
										<span class="span-or ">or</span>
										
									</div>
									
								</div>
								
								<div class="col-md-12 mb-3 center">
									
									<a href="<?=PROOT?>register/register" class="google btn-block btn-reg mybtn">
										Sign up here
									</a>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php $this->end(); ?>