<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<table class="table table-striped" id="table">

 <thead class="thead-dark">

   <th>ID</th>
   <th>USER_ID</th>
   <th>NAME</th>
   <th>FORMAT</th>
   <th>IMG</th>
   <th>BUTTons</th>
   </thead>
   <input type="text" id="search" placeholder="Type to search">
   <tbody>



    <?php foreach ($this->upload as $upload): ?>
     <tr>
     <td><?= $upload->id;   ?></td>
     <td><?= $upload->user_id;?></td>
     <td><?= $upload->name;?></td>
     <td><?= $upload->format;?></td>
     <?php $dir = Users::currentUser()->id; ?>
     <td>
         <div class="row">
  <div class="column">
    <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>"  height="70" width="70" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
         </div>
         <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
     <div class="modal-content">

    <div class="mySlides img-fluid">
      <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" >
    </div>     
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
         <div class="column">
      <img class="demo cursor" src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" style="width:100%" onclick="currentSlide(1)">
    </div>
             </div>
         </div>
             </td>
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
