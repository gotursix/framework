<?php
use App\Models\Users;
use Core\Session;
 ?>
<?php $this->start('body'); ?>
<div class="background">
    <div class="container center">
    <div class="row">


<h1 class="center head-form col-md-5 mx-auto formerfix">Delete files</h1>



<div class="container">

  <div class="input-group mb-3">
    <?php if($this->upload): ?>
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
      <input type="text" id="search" placeholder="Search for the file" class="form-control">
      <br>
       <?php endif; ?>
  </div>


<?= Session::displayMsg() ?>
<div class=" whitetable"?>
<table class="table table-striped" id="table">
<thead class="thead-dark">


   <th scope="col" class="table-content"><h5>Name</h5></th>
   <th scope="col" class="table-content"><h5>File</h5></th>
   <th scope="col" class="table-content"><h5>Delete</h5></th>
   </thead>

   <tbody>
    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td class="center center-h"><?= $upload->name;?></td>
     <?php $dir = Users::currentUser()->id; ?>

     <?php if($upload->format == 1): ?>

     <td ><br><img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  class="img-responsive"><br></td>
   <?php endif; ?>


   <?php if($upload->format == 2): ?>
   <td><video  class="img-responsive" controls>
     <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4">
       Your browser does not support the video tag.
     </video></td>
      <?php endif; ?>



         <?php if($upload->format == 3): ?>
         <td class="center-h"><audio controls>
              <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
               Your browser does not support the audio element.
             </audio></td>
            <?php endif; ?>



            <?php if($upload->format == 4): ?>
            <td class="center-h"><a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  target="_blank">View the pdf</a></td>
               <?php endif; ?>




     <td class="center-h"> <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         Delete
      </a></td>

     <?php endforeach; ?>



        <?php if(!$this->upload): ?>
             <td colspan="3" class="center" class="center-h">
               <h1>
                 You don't have any file.
               </h1>
             </td>
           <?php endif; ?>
   </tr>
   </tbody>
</table>
    </div>
</div>
<br>
</div>
</div>
</div>

<script>
var $rows = $('#table tr');
$('#search').keyup(function()
{
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;

    $rows.show().filter(function()
    {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});
</script>

<?php $this->end(); ?>
