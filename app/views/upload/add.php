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
                                                <input type="textd" name="name" id="name" class="form-control" value="" required>
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
