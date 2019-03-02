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
        <a href="<?=PROOT?>contain/details/<?=$album->id ?>" class="btn btn-info btn-xs">
          View album
        </a>

      </td>

      <td>
       <div class="btn-group text-center">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Actions
  </button>
  <div class="dropdown-menu">
    <a href="<?=PROOT?>contain/edit/<?=$album->id?>" class="dropdown-item">Add/Remove files</a>


    <a href="<?=PROOT?>album/edit/<?=$album->id?>" class="dropdown-item">
      Change name
    </a>

    <div class="dropdown-divider"></div>

    <a href="<?=PROOT?>album/delete/<?=$album->id?>" class="dropdown-item" onclick="if(!confirm('Are you sure ?')){return false;}">
      Delete
    </a>
  </div>
</div>
     </td>
     <?php endforeach; ?>
   </tr>
   </tbody>
</table>
</div>
<?php $this->end(); ?>
