<?php
use Core\FH;
 ?>
<?php  $this->setSiteTitle('Upload a file'); ?>

<?php $this->start('body'); ?>
        <body class="off-canvas-sidebar">
            <div class="wrapper wrapper-full-page" style="background-image: url('<?=PROOT?>img/upload.jpg'); background-size: cover; ">
                <div class="full-page login-page" filter-color="black" >
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">


        								<form method="post" enctype="multipart/form-data">

        								<div class="card card-login">
                          <?= FH::csrfInput() ?>


                     <div class="card-header text-center" data-background-color="rose" >
                             <h3 class="card-title">Upload</h3>
                         </div>

                       <div class="card-content">
                           <div class="input-group">
                               <span class="input-group-addon">
                               </span>

                        <div class="form-group label-floating">
                            <label class="control-label"><h4>Chose a name for the file</h4></label>
                            <br>
                            <input type="textd" name="name" id="name" class="form-control" value="" required>
                        </div>
        											<br><br>
        				     <div class="form-group label-floating">
                              <label class="control-label"><h4>Choose a file</h4></label>
                              <br>

                              <input type="file" id="file" name="file" required>
                                      </div>
                          </div>
                      </div>
                          <div class="footer text-center">
                                   <div class="file-upload">
        					      <label for="submit" class="file-upload__label">
                          <div class="isa_error_class">
                  <?= FH::displayErrors($this->displayErrors)?>
                    </div>
        													<button class="btn btn-wd btn-lg" data-background-color="rose">Submit</button>
        											</label>
        											<input type="submit" name="submit" value="Submit" class="file-upload__input">
        										</div>
                  </div>
        		</form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>
<?php $this->end(); ?>
