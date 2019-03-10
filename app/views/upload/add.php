<<<<<<< Updated upstream
<?php
use Core\FH;
 ?>
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
						 <div class="col-md-12 center head-form">
							<h1>Upload file</h1>
						 </div>
					</div>
                <span class="input-group-addon">
                </span>
                <div class="form-group">
                          <label class="control-label"><h4>Choose a name</h4></label>
                          <input type="text" name="name" id="name" class="form-control" value="" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                                                                            <br>

                                                     <input type="file" id="file" name="file" required>
                                                             </div>
                                      <?= FH::displayErrors($this->displayErrors)?>

                                    <div class="footer center">
                                      	<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Submit</button>
                                    </div>



                                                               <div class="col-md-12 ">
                                                                  <div class="login-or">
                                                                     <hr class="hr-or">
                                                                     <span class="span-or noselect">or</span>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-12 mb-3 center">
                                                                     <a href="<?=PROOT?>" class="google btn mybtn">
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
=======
<?php
use Core\FH;
 ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/upload.jpg'); background-size: cover; ">
        <div class="full-page login-page" filter-color="black" >
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                          <form method="post" enctype="multipart/form-data">
                            <?= FH::csrfInput() ?>

                                <div class="card card-login">


                                  <div class="card-header text-center" data-background-color="rose" style="margin-left: 15px;">
                                          <h3 class="card-title">Upload file</h3>
                                      </div>

                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            </span>

                                            <div class="form-group label-floating">
                                                <label class="control-label"><h4>Chose a name</h4></label>
                                                <br>
                                                <input type="text" name="name" id="name" class="form-control" value="" required>
                                            </div>

                                            <div class="form-group label-floating">
                                                     <label class="control-label"><h4>Choose a file</h4></label>
                                                     <br>

                                                     <input type="file" id="file" name="file" required>
                                                             </div>


                                      </div>
                                    </div>



                                    <div class="isa_error_class">
                                      <?= FH::displayErrors($this->displayErrors)?>
                                    </div>

                                      <br>

                                    <div class="footer text-center">
                                      	<button class="btn btn-wd btn-lg" data-background-color="rose">Submit</button>
                                    </div>



                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

<?php $this->end(); ?>
>>>>>>> Stashed changes
