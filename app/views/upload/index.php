<?php
use App\Models\Users;
use Core\Session;
 ?>
<?php $this->start('body'); ?>
<div class="container m-top">
<h1 class="text-center ">Delete files</h1>
<div class="input-group mb-3">

<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>

<input type="text" id="search" placeholder="Search for the file" class="form-control">
<br>
</div>

<?= Session::displayMsg() ?>

<table class="table table-striped center" id="table">
 <thead class="thead-dark c">

   <th>Name</th>
   <th>File</th>
   <th>Delete</th>
   </thead>

   <tbody>
    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td class="center"><?= $upload->name;?></td>
     <?php $dir = Users::currentUser()->id; ?>

     <?php if($upload->format == 1): ?>

     <td><img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  style="max-height: 350px; max-width:350px;"></td>
   <?php endif; ?>


   <?php if($upload->format == 2): ?>
   <td><video  style="max-height: 350px; max-width:350px;" controls>
     <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4">
       Your browser does not support the video tag.
     </video></td>
      <?php endif; ?>



         <?php if($upload->format == 3): ?>
         <td><audio controls>
              <source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
               Your browser does not support the audio element.
             </audio></td>
            <?php endif; ?>



            <?php if($upload->format == 4): ?>
            <td><a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">View the pdf</a></td>
               <?php endif; ?>




     <td> <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         Delete
      </a></td>

     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
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
