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
                  <div class="row" >
                         <?php $x=1; ?>
                         <?php foreach ($this->upload as $upload): ?>
                         <?php $dir = Users::currentUser()->id; ?>
                    <div class="round">
                    <input type="checkbox" id="cb1" />
                    <label for="cb1" onclick="myFunction()" class="top-left">  </label>
                    </div>
                      <div id="lightgallery">
                              <div class="col-sm-3"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
                           
                                    <div class="thumbnail text-center">
                                      <img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="imgu">
         
                                    </div>

                                    <div class="caption text-center">
                                      <hr>
                                 <p><?= $upload->name;?> </p>
                                       <div class="text-center">
                                         <a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs " onclick="if(!confirm('Are you sure ?')){return false;} target='_blank' ">
                                           Delete
                                         </a>
                                       </div>
                                   </div>
                              </div>
                         <?php $x++; ?>
                         <?php endforeach; ?>
                         </div>
                      </div>
    
                       </div>
<nav id="myDIV" class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
        
<script> lightGallery(document.getElementById('lightgallery')); </script>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
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
