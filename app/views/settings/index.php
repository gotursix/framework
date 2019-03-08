<?php
use App\Models\Users;
use Core\Session;
 ?>
<?php $this->start('body'); ?>
<div class="background">
<div class="container">
    <div class="row">
<h1 class="center head-form col-md-5 mx-auto formerfix">Delete files</h1>
<div class="input-group mb-3">

<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>

<input type="text" id="search" placeholder="Search for the file" class="form-control">
<br>

</div>

<div class="center">


  <?= Session::displayMsg() ?>
<div class=" whitetable"?>
<table class="table table-striped">
 <thead class="thead-dark">

   <th>Name</th>
   <th>File</th>
   <th>Delete</th>
   </thead>

   <tbody>
    <?php foreach ($this->settings as $settings): ?>
     <tr>
     <td class="center"><?= $settings->name;?></td>
     <?php $dir = Users::currentUser()->id; ?>

     <?php if($settings->format == 1): ?>

     <td><img src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>"  style="max-height: 350px; max-width:350px;"></td>
   <?php endif; ?>


   <?php if($settings->format == 2): ?>
   <td><video  style="max-height: 350px; max-width:350px;" controls>
     <source src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" type="video/mp4">
       Your browser does not support the video tag.
     </video></td>
      <?php endif; ?>



         <?php if($settings->format == 3): ?>
         <td><audio controls>
              <source src="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" type="audio/mpeg">
               Your browser does not support the audio element.
             </audio></td>
            <?php endif; ?>



            <?php if($settings->format == 4): ?>
            <td><a href="<?= PROOT . 'files' . DS . $dir  . DS . $settings->name ;?>" target="_blank">View the pdf</a></td>
               <?php endif; ?>




     <td> <a href="<?=PROOT?>settings/delete/<?=$settings->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
        Delete
      </a></td>

     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
    </div>
</div>
</div>
</div>
<br>
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
