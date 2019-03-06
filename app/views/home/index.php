<?php
use Core\Session;
 ?>
<?php //$this->setSiteTitle('Home'); //set every spage title ?>

<?php $this->start('body'); ?>
<h1 class="center m-top">Welcome to Rufus Framework</h1>
<div class="center" onclick="ajaxTest();">Button me :>></div>


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

<?php $this->end(); ?>
