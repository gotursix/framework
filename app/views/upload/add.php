<?php
use Core\FH;
 ?>
<?php  $this->setSiteTitle('Upload a file'); ?>

<?php $this->start('body'); ?>
  <section class="intro">
            <row>
                <form action="<?=PROOT?>upload/add" method="post" class="form-dimmension">
                <div class="col-lg-6 upload-position center" >
                        <label for="upload" class="file-upload__label"><img src="<?=PROOT?>img/upload.png" max-width="350px"/></label>
                      <input type="file" name="file" id="upload" class="file-upload__input">
                </div>
                <div class="col-lg-6 upload-position">


                  <?= FH::csrfInput() ?>

                    <div class="card card-login">
                        <div class="card-header text-center" data-background-color="rose">
                            <h3 class="card-title">Name your photo</h3>
                        </div>
                        <br>
                        <div class="card-content">
                            <div class="input-group">
                                    <div class="form-group label-floating form-alignment">

                                          <input type="text" name="name" id="name" class="form-control" placeholder="Ex: My dog" class=""><br>
                                    </div>
                            </div>
                        </div>

                        <div class="isa_error_class">
                          <?= FH::displayErrors($this->displayErrors)?>
                        </div>



                        <div class="footer text-center">
                            <div class="file-upload">
                                <label for="submit" class="file-upload__label">
                                  <button type="submit" class="btn btn-wd btn-lg" data-background-color="rose">Submit</button>
                                </label>
                            </div>
                        </div>
                  </div>
                </form>
              </div>
            </row>
        </section>




</div>
<?php $this->end(); ?>
