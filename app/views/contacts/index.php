<?php $this->start('body'); ?>
<h2 class="text-center">My contacts</h2>
<br>
<table class="table">
 <thead class="thead-dark">

   <th>Name</th>
   <th>Email</th>
   <th>Cell Phone</th>
   <th>Home</th>
   <th>Work Phone</th>
   <th></th>
   </thead>

   <tbody>
    <?php foreach ($this->contacts as $contact): ?>
     <tr>
     <td>
       <a href="<?=PROOT?>contacts/details/<?=$contact->id ?>">
       <?= $contact->displayName() ;?>
     </a>
     </td>
     <td><?= $contact->email;   ?></td>
     <td><?= $contact->cell_phone;?></td>
     <td><?= $contact->home_phone;?></td>
     <td><?= $contact->work_phone;?></td>
     <td>
         <a href="<?=PROOT?>contacts/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
         <i class="glyphicon glyphicon-remove>"></i> Delete
         </a>
     </td>
     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
<?php $this->end(); ?>
