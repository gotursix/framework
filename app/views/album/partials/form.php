<?php
use Core\FH;
?>
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
                  <h1>Create a new album</h1>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label"><h4>Choose a name</h4></label>
                <input type="text" name="name" id="name" class="form-control" value="" placeholder="Name" required>
              </div>
              <div class="form-group center">
                <label class="control-label"><h4>Choose the album format</h4></label>
                <br>
                <select name="format">
                  <option value="1">Images</option>
                  <option value="2">Video</option>
                  <option value="3">Audio</option>
                  <option value="4">Documents</option>
                </select>
              </div>
              <?= FH::displayErrors($this->displayErrors)?>
              <div class="footer center">
                <button type="submit" class=" btn-reg btn-block mybtn btn-primary tx-tfm">Submit</button>
              </div>
              <div class="col-md-12 ">
                <div class="login-or">
                  <hr class="hr-or">
                  <span class="span-or ">or</span>
                </div>
              </div>
              <div class="col-md-12 mb-3 center">
                <a href="<?=PROOT?>album" class="google btn-block btn mybtn">
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