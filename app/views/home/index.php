<?php
use Core\Session;
use Core\FH;
use App\Models\Users;
?>

<?php //$this->setSiteTitle('Home'); //set every spage title ?>
<?php $this->start('body'); ?>
<div class="background ">
  <div class="container">
    <br>
    <br>
    <br>
    <div class="whitebg m-top">
      <h1 class="center ">Welcome to Rufus Framework</h1>
      <div class="center" onclick="ajaxTest();">Button me :>></div>
     
      <?php if(Users::currentUser() &&  preg_match('/(Chrome|CriOS)\//i',$_SERVER['HTTP_USER_AGENT']) && !preg_match('/(Aviator|ChromePlus|coc_|Dragon|Edge|Flock|Iron|Kinza|Maxthon|MxNitro|Nichrome|OPR|Perk|Rockmelt|Seznam|Sleipnir|Spark|UBrowser|Vivaldi|WebExplorer|YaBrowser)/i',$_SERVER['HTTP_USER_AGENT']) )	: ?>
       <h1 class="center ">Aici comenzi vocale.</h1>
  	 <?php endif; ?>


    </div>
  </div>
</div>
</div>
<script>
function ajaxTest(){
$.ajax({
type: "POST",
url : '<?=PROOT?>home/testAjax',
data : {model_id:45},
success : function(resp){
if(resp.success){
window.alert(resp.data.name);
}
console.log(resp);
}
});
}
</script>
</div>
<?php $this->end(); ?>