<?php //$this->setSiteTitle('Home'); //set every spage title ?>

<?php $this->start('body'); ?>
<h1 class="text-center red">Welcome to Rufus Framework</h1>
<div onclick="ajaxTest();">Button me :>></div>

<div class="container center">
<div class="row right">
<div class="col-sm-* col-centered">
<div class="row">

<div class="col card">
<div class="thumbnail">
<div class="caption">
    <div class="card-body">
<h3>Images</h3>
        <a href="<?=PROOT?>upload/images"><img src="<?=PROOT?>img/picture.png"></a>
</div>
</div>
</div>
</div>

<div class="col card">
<div class="thumbnail">
             <div class="caption">
                 <div class="card-body">
             <h3>Videos</h3>
            <a href="<?=PROOT?>upload/video"><img src="<?=PROOT?>img/itunes.png"></a>

</div>
</div>
</div>
</div>
</div>
<div class="row">
 <div class="col card">
<div class="thumbnail">
             <div class="caption">
                 <div class="card-body">
             <h3>Music</h3>
    <a href="<?=PROOT?>upload/audio"><img src="<?=PROOT?>img/musical.png"></a>

</div>
</div>
</div>
</div>
<div class="col card">
<div class="thumbnail">
             <div class="caption">
                 <div class="card-body">
             <h3>Documents</h3>
    <a href="<?=PROOT?>upload/documents"><img src="<?=PROOT?>img/folder.png"></a>
</div>
</div>
</div>
</div>
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

<?php $this->end(); ?>
