<?php
use Core\H;
use Core\Session;
?>
<?php $this->start('body'); ?>


<div class="background">
    <div class="container ceter">
    <div class="row">

      <h1 class="center head-form col-md-5 mx-auto formerfix">My albums</h1>
</div>


        <div class="whitediv center buttondiv">

            <hr>
            <a href="<?=PROOT?>album/add" class="btn btn-info" >
              Create album
            </a>
            <hr>
          </div>
<br>
<div class="row">
<div class="container center">
  <?= Session::displayMsg() ?>
<div class="center whitetable">
<table class="table table-striped ">
 <thead class=" table-dark">

   <th scope="col" class="table-content"><h4>Album name<h4></th>
   <th scope="col" class="table-content"><h4>Album contains<h4></th>
   <th scope="col" class="table-content"><h4>Album actions<h4></th>
   </thead>

   <tbody>
    <?php foreach ($this->album as $album): ?>
     <tr>
     <td class="table-fix">
       <a href="<?=PROOT?>contain/details/<?=$album->id ?>" >
           <h5><font class="album-name"><i><?= strtoupper( $album->name) ;?></font></i></h5>
       </a>
     </td>

      <td class="table-fix">
           <?= H::format($album->format) ;?>
      </td>
      <td class="table-fix">
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

    <a href="<?=PROOT?>album/delete/<?=$album->id?>" class="dropdown-item text-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">
      Delete
    </a>
  </div>
</div>
     </td>

     <?php endforeach; ?>


   <?php if(!$this->album): ?>
        <td colspan="3" class="center">
          <h1>
             You have no albums.
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
    </div>
<?php $this->end(); ?>
