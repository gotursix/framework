<?php
use Core\FH;
 ?>
<div class="wrapper wrapper-full-page " style="background-image: url('<?=PROOT?>img/login.jpeg'); background-size: cover; ">
    <div class="full-page login-page" filter-color="black" >
        <div class="content">
            <div class="container">
              <br>
              <br>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                      <form method="post" action=<?= $this->postAction?> enctype="multipart/form-data">
                        <?= FH::csrfInput() ?>

                            <div class="card card-login">


                              <div class="card-header text-center" data-background-color="rose" style="margin-left: 15px;">
                                      <h3 class="card-title">Change the name</h3>
                                  </div>

                                <div class="card-content">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label"><h4>Change the name</h4></label>
                                            <br>
                                            <input type="text" name="name" id="name" class="form-control" value="<?=$this->album->name?>" required>
                                        </div>



                                    </div>
                                </div>



                                <div class="isa_error_class">
                                  <?= FH::displayErrors($this->displayErrors)?>
                                </div>

                                  <br>



                                  <div class="footer text-center">
                                      <button type="submit" class="btn btn-wd btn-lg" data-background-color="rose">Save</button>
                                  </div>

                              <div class="footer text-center">
                                <a href="<?=PROOT?>album" class="btn btn-danger btn-xs">Cancel</a>
                                  </div>



                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
