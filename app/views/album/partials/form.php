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
                   <div class="col-md-12 center">
                     <h1>Create a new album</h1>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="control-label"><h4>Chose a name</h4></label>
                   <input type="text" name="name" id="name" class="form-control" value="" placehold="Name" required>
                 </div>


                                 <div class="form-group center">
                                  <label class="control-label"><h4>Chose the album format</h4></label>
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
              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Submit</button>
          </div>
    </div>
</div>
</div>
           </div>
    </div>
  </form>
</div>
