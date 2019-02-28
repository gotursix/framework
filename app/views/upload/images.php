<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<div class="container">
   <input type="text" id="search" placeholder="Type to search">
                <br>
                <br>
                  <div class="row"  id="lightgallery">
                         <?php $x=1; ?>
                         <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                              <div class="col-sm-3"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                                   <div class="thumbnail text-center">
                                      <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
                                    </div>

                                    <div class="caption text-center">
                                      <hr>
                                 <p><?= $upload->name;?> </p>
                                       <div class="text-center">
                                         <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs " onclick="if(!confirm('Are you sure ?')){return false;} target="_blank" ">
                                           Delete
                                         </a>
                                       </div>
                                   </div>
                              </div>
                         <?php $x++; ?>
                         <?php endforeach; ?>
                         </div>
                       </div>
        
<script> lightGallery(document.getElementById('lightgallery')); </script>

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
