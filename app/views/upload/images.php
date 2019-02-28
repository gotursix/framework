<?php
use App\Models\Users;
use App\Models\Upload;
 ?>
<?php $this->start('body'); ?>
<h2 class="text-center">My images</h2>
<table class="table table-striped" id="table">


    <div class="container">
   <input type="text" id="search" placeholder="Type to search">

   <br><br>

        <div class="row">

    <?php foreach ($this->upload as $upload): ?>
     <?php $dir = Users::currentUser()->id; ?>
     <div class="col-sm-3">
          <div class="thumbnail">
            <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" style=" width: 100%;	max-width: 250px; height: auto;"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
             <div class="caption text-center">
               <hr>

          <p> <?= $upload->name;?> </p>


                <div class="text-center">

                  <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs " onclick="if(!confirm('Are you sure ?')){return false;}">
                    Delete
                  </a>            </div>
            </div>


                        </div>

                      <?php endforeach; ?>




                         </div>


              </div>
                  </div>


  </div>


            </div>


              </div>
                  </div>




 </div>
</div>






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
