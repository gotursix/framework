<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>
<div class="container">
<h2 class="text-center">My Uploaded files</h2>
<br>
<div class="input-group mb-3">

<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>

<input type="text" id="search" placeholder="Search for the file" class="form-control">
<br>
</div>
<table class="table table-striped" id="table">
 <thead class="thead-dark">

   <th>ID</th>
   <th>NAME</th>
   <th>IMG</th>
   <th>BUTTons</th>
   </thead>

   <tbody>
    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td><?= $upload->id;   ?></td>
     <td><?= $upload->name;?></td>
     <?php $dir = Users::currentUser()->id; ?>
     <td><img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  height="70" width="70"></td>
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
