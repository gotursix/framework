<?php
use Core\FH;
 ?>
<div class="background">
    <form method="post"   action=<?= $this->postAction?> enctype="multipart/form-data">
      <?= FH::csrfInput() ?>
        <div class="container">
         <div class="content">
          <div class="row">
           <div class="col-md-5 mx-auto formerfix">
             <div class="myform form">
              <div class="logo mb-3">
                <div class="col-md-12 center">
                 <h1>Change the name</h1>
                 </div>
              </div>

                <div class="form-group">
                  <label class="control-label"><h4>Chose another name</h4></label>
                  <input type="text" name="name" id="name" class="form-control" value="<?=$this->album->name?>" placehold="Name" required>
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
