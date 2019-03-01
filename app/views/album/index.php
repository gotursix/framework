<?php $this->start('body'); ?>
<br><br><br><br>
<h2 class="text-center">My albums</h2>
<br>

<div class="container">
<table class="table">
 <thead >
   <th>Name</th>
   <th>Format</th>
   <th>BUTTon</th>
   </thead>

   <tbody>
    <?php foreach ($this->album as $album): ?>
     <tr>
     <td>
       <a href="<?=PROOT?>album/details/<?=$album->id ?>">
       <?= $album->name ;?>
     </a>
     </td>
      <td>
           <?= $album->format ;?>
      </td>
     <td>
       <a href="<?=PROOT?>album/edit/<?=$album->id?>" class="btn btn-info btn-xs">Edit</a>

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
