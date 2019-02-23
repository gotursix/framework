<?php $this->start('body'); ?>
<h2 class="text-center">My Uploaded files</h2>
<br>
<table class="table table-striped">
 <thead class="thead-dark">

   <th>ID</th>
   <th>USER_ID</th>
   <th>NAME</th>
   <th>FORMAT</th>
   </thead>

   <tbody>
    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td><?= $upload->id;   ?></td>
     <td><?= $upload->user_id;?></td>
     <td><?= $upload->name;?></td>
     <td><?= $upload->format;?></td>

     <?php endforeach; ?>
   </tr>
   </tbody>
</table>




<div class="footer text-center">
    <label class="control-label reset-button btn"><h8><a href="<?=PROOT?>upload/add" class="reset-button">Reset password</a></h8></label>
</div>
<?php $this->end(); ?>
