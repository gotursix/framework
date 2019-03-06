<?php
use Core\Session;
 ?>
<?php //$this->setSiteTitle('Home'); //set every spage title ?>

<?php $this->start('body'); ?>
    <div class="background">
        <div class="container">
        <div class="row">
         <h1 class="center head-form col-md-5 mx-auto formerfix">Welcome to Rufus Framework</h1>
<div class="center head-form col-md-5 mx-auto formerfix" onclick="ajaxTest();">Button me :>></div>   
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
