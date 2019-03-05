<?php
use App\Models\Users;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My Uploaded files</h2>
<br>

<input type="text" id="search" placeholder="Type to search">

<table class="table table-striped" id="table">
 <thead class="thead-dark">

   <th>ID</th>
   <th>USER_ID</th>
   <th>NAME</th>
   <th>FORMAT</th>
   <th>IMG</th>
   <th>BUTTons</th>
   </thead>

   <tbody>
    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td><?= $upload->id;   ?></td>
     <td><?= $upload->user_id;?></td>
     <td><?= $upload->name;?></td>
     <td><?= $upload->format;?></td>
     <?php $dir = Users::currentUser()->id; ?>
     <td><img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  height="70" width="70"></td>
     <td> <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         Delete
      </a></td>

     <?php endforeach; ?>
   </tr>
   </tbody>
</table>

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
