<?php $this->start('body'); ?>
<br><br><br><br>
<h2 class="text-center">My albums</h2>
<br>

<div class="container">
<table class="table table-striped">
 <thead class="thead-dark">

   <th>Name</th>
   <th>Email</th>
   <th>Cell Phone</th>
   <th>Home</th>
   <th>Work Phone</th>
   <th>BUTTons</th>
   </thead>

   <tbody>
    <?php foreach ($this->album as $contact): ?>
     <tr>
     <td>
       <a href="<?=PROOT?>album/details/<?=$contact->id ?>">
       <?= $contact->displayName() ;?>
     </a>
     </td>
     <td><?= $contact->email;   ?></td>
     <td><?= $contact->cell_phone;?></td>
     <td><?= $contact->home_phone;?></td>
     <td><?= $contact->work_phone;?></td>
     <td>
       <a href="<?=PROOT?>album/edit/<?=$contact->id?>" class="btn btn-info btn-xs">Edit</a>

         <a href="<?=PROOT?>album/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
            Delete
         </a>
     </td>
     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
</div>
<?php $this->end(); ?>
