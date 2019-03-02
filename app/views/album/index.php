<?php
use Core\H; ?>
<?php $this->start('body'); ?>
<br><br><br><br>
<h1 class="text-center">My albums</h1>
<br>

<div class="container text-center">
<table class="table table-striped">
 <thead class=" table-dark">
   <th>Album name</th>
   <th>Album contains</th>
   <th>View</th>
   <th>Add or remove files</th>
   <th>Album actions</th>
   </thead>

   <tbody>
    <?php foreach ($this->album as $album): ?>
     <tr>
     <td>
        <h5><?= strtoupper( $album->name) ;?></h5>
     </a>
     </td>

      <td>
           <?= H::format($album->format) ;?>
      </td>
      <td>
           <a href="<?=PROOT?>album/details/<?=$album->id ?>" class="btn btn-info btn-xs">
             View album
           </a>
      </td>
      <td>
         <a href="<?=PROOT?>album/edit/<?=$album->id?>" class="btn btn-info btn-xs">Add/Remove</a>
      </td>
      <td>
       <a href="<?=PROOT?>album/edit/<?=$album->id?>" class="btn btn-info btn-xs">
         Change name
       </a>
       <a href="<?=PROOT?>album/delete/<?=$album->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         Delete
       </a>
     </td>
     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
</div>
<?php $this->end(); ?>
