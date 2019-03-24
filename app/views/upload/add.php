<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Upload a file'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="background">
	<form method="post" enctype="multipart/form-data">
		<?= FH::csrfInput() ?>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-5 mx-auto formerfix">
						<div class="myform form">
							<div class="logo mb-3">
								<div class="col-md-12 center head-form ">
									<h1>Upload file</h1>
								</div>
							</div>
							<span class="input-group-addon"></span>
							<div class="form-group">
								<label class="control-label"><h4>Choose a name</h4></label>
								<input type="text" name="name" id="name" class="form-control " value="" placeholder="Name" required>
							</div>
							<div class="form-group ">
								<br>
								<input type="file" id="file" name="file" required>
							</div>
							<div class="">
								<?= FH::displayErrors($this->displayErrors)?>
							</div>
							<div class="footer center">
								<button type="submit" class=" btn-reg btn-block mybtn btn-primary tx-tfm" id="save">Submit</button>
							</div>
							<div class="col-md-12 ">
								<div class="login-or">
									<hr class="hr-or">
									<span class="span-or ">or</span>
								</div>
							</div>
							<div class="col-md-12 mb-3 center">
								<a href="<?=PROOT?>" class="google btn-block btn mybtn" id="cancel">
									Cancel
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script>
file.onchange = function(e) {
//Get the file path
var fileName = document.getElementById("file").value;
//Get the filename
var fileName2 = fileName.replace(/^.*[\\\/]/, '');
//Remove the extension and set the input text
document.getElementById("name").value = fileName2.replace(/\.[^/.]+$/, "");
};
</script>
<?php $this->end(); ?>