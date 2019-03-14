<?php
use Core\H;
use Core\Session;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container">
    <div class="content">
      <div class="row">
        <div id="image-grid" class="container-fluid ">
          <div class="whitebg center formerfix">
            <h1 class="center lg-bg col-md-5 mx-auto ">My albums</h1>
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
   <th scope="col">Album name</th>
   <th scope="col">Album contains</th>
   <th scope="col">Album actions</th>
   </thead>

   <tbody>
    <?php foreach ($this->album as $album): ?>
     <tr>
     <td>
       <a href="<?=PROOT?>contain/details/<?=$album->id ?>" >
           <h5><font class="album-name"><i><?= strtoupper( $album->name) ;?></font></i></h5>
       </a>
     </td>

      <td>
           <?= H::format($album->format) ;?>
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
<?php $this->end(); ?>