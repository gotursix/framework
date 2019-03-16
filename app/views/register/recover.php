<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="background">
	<form action="<?=PROOT?>register/recover" method="post">
		<?= FH::csrfInput() ?>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-5 mx-auto formerfix">
						<div class="myform form">
							
							<div class="logo mb-3">
								
								<div class="col-md-12 center head-form ">
									
									<h1>Recover password</h1>
									
								</div>
								
							</div>
														
								<div class="form-group">
									
									<label >Email</label>
									<input type="text" name="email" id="email"  class="form-control "  placeholder="Enter email">
									
								</div>
								<?= FH::displayErrors($this->displayErrors)?>
								<div class="col-md-12 text-center mb-3">
									
									<button type="submit" class=" btn-reg btn-block mybtn btn-primary tx-tfm">Recover</button>
									
								</div>
								<div class="col-md-12 ">
									
									<div class="login-or">
										
										<hr class="hr-or">
										<span class="span-or ">or</span>
										
									</div>
									
								</div>
								
								<div class="col-md-12 mb-3 center">
									
									<a href="<?=PROOT?>register/restore" class="google btn-block btn-reg mybtn">
										Login here
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