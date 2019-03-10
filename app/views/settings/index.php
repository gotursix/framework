<?php
use App\Models\Users;
use Core\Session;
 ?>
<?php $this->start('body'); ?>
<div class="background">
    <div class="container center">
    <div class="row">


<h1 class="center head-form col-md-5 mx-auto formerfix">Deleted files</h1>



<div class="container">
  <div class="input-group mb-3">
    <?php if($this->settings): ?>
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
      <input type="text" id="search" placeholder="Search for the file" class="form-control">
      <br>
       <?php endif; ?>
  </div>

  <?= Session::displayMsg() ?>
<div class=" whitetable" >
<table class="table table-striped" id="table">

 <thead class="thead-dark">

   <th scope="col">Name</th>
   <th scope="col">File</th>
   <th scope="col">Delete</th>
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
      </a>
      <br><br>
      <a href="<?=PROOT?>settings/recover/<?=$settings->id?>" class="btn btn-primary btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         Restore
       </a>
    </td>
     <?php endforeach; ?>

   <?php if(!$this->settings): ?>
        <td colspan="3" class="center">
          <h1>
            There are no files to be restored.
          </h1>
        </td>
      <?php endif; ?>

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
