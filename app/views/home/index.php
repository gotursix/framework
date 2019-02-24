<?php //$this->setSiteTitle('Home'); //set every spage title ?>

<?php $this->start('body'); ?>
<h1 class="text-center red">Welcome to Rufus Framework</h1>
<div onclick="ajaxTest();">Button me :>></div>

<div class="container center">
<div class="row">
<div class=" col-sm-*">
<div class="row">

<div class="col">
<div class="thumbnail">
<div class="caption">
<h3>Images</h3>
<p></p><p>Cât de periculoase pot fi alergiile de primăvară? Ce se întâmplă cu sistemul imunitar? Sfaturile medicilor<br>
 Primăvara este sezonul în care alergiile îşi fac de cap&nbsp;[...]</p>
<p></p>
<hr>
<div class="center">
<a href="reportaje/stire.php?title=Cât de periculoase pot fi alergiile de primăvară?&amp;date=2018-05-30 13:13:13&amp;hmm=1" class="btn btn-info" role="button"> Mai mult</a>
</div>
</div>
</div>
</div>

<div class="col">
<div class="thumbnail" style="border-style">
             <div class="caption">
             <h3>Videos</h3>
            <p></p><p> O dietă face ca mulți oameni să fie mult mai conștienți de modul în care alimentele pe care le mănâncă le afectează corpul-fără probleme constante de nivel scăzut ale intestinelor [...]</p><p></p>
            <hr>
<div class="center">
<a href="reportaje/stire.php?title=Un ghid pentru alergii, intoleranțe și toxine.&amp;date=2018-05-16 05:36:18&amp;hmm=2" class="btn btn-info" role="button"> Mai mult</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
 <div class="col">
<div class="thumbnail">
             <div class="caption">
             <h3>Music</h3>
            <p></p><p>Cu alergii alimentare, ameliorarea simptomelor cu dieta este simplă: pur   și simplu nu mâncați alimentele la care sunteți alergic. Dar cu alte   alergii, legătura dintre [...]</p>
<p></p>
            <hr>
<div class="center">
<a href="reportaje/stire.php?title=&lt;h3&gt;Cu alergii alimentare, ameliorarea simptomelor &lt;/h3&gt;&amp;date=2018-05-09 06:33:13&amp;hmm=3" class="btn btn-info" role="button"> Mai mult</a>
</div>
</div>
</div>
</div>
<div class="col">
<div class="thumbnail" style="border-style">
             <div class="caption">
             <h3>Documents</h3>
            <p></p><p> O dietă face ca mulți oameni să fie mult mai conștienți de modul în care alimentele pe care le mănâncă le afectează corpul-fără probleme constante de nivel scăzut ale intestinelor [...]</p><p></p>
            <hr>
<div class="center">
<a href="reportaje/stire.php?title=Un ghid pentru alergii, intoleranțe și toxine.&amp;date=2018-05-16 05:36:18&amp;hmm=2" class="btn btn-info" role="button"> Mai mult</a>
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
