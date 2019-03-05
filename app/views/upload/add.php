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
						 <div class="col-md-12 center">
							<h1>Upload file</h1>
						 </div>
					</div>
                <span class="input-group-addon">
                </span>
                <div class="form-group">
                          <label class="control-label"><h4>Chose a name</h4></label>
                          <input type="text" name="name" id="name" class="form-control" value="" placehold="Name" required>
                  </div>
                  <div class="form-group">
                                                                            <br>

                                                     <input type="file" id="file" name="file" required>
                                                             </div>
                                      <?= FH::displayErrors($this->displayErrors)?>

                                    <div class="footer center">
                                      	<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Submit</button>
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
