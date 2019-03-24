<?php
use Core\Session;
use Core\FH;
use App\Models\Users;
?>
<?php $this->setSiteTitle('Home'); ?>
<?php $this->start('body'); ?>
<div class="background ">
    <div class="content">
        <div class="row">
            <div id="image-grid" class="container-fluid ">
                <div class="whitebg center formerfix">
                    <h1 class="center ">Welcome to Rufus Framework</h1>
                    <div class="center" onclick="ajaxTest();">Button me :>></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">

                        <div id="carousel-299058" class="carousel slide">

                            <ol class="carousel-indicators">

                                <li data-target="#carousel-299058" data-slide-to="0" class=""> </li>

                                <li data-target="#carousel-299058" data-slide-to="1" class="active"> </li>

                                <li data-target="#carousel-299058" data-slide-to="2" class=""> </li>

                            </ol>

                            <div class="carousel-inner">

                                <div class="item"> <img class="img-responsive" src="<?=PROOT?>img/" alt="thumb">

                                    <div class="carousel-caption"> </div>

                                </div>

                                <div class="item active"> <img class="img-responsive" src="<?=PROOT?>img/" alt="thumb">

                                    <div class="carousel-caption"> </div>

                                </div>

                                <div class="item"> <img class="img-responsive" src="<?=PROOT?>img/" alt="thumb">

                                    <div class="carousel-caption"></div>

                                </div>

                            </div>

                            <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a>
                        </div>

                    </div>
                    
                    <h1 class="center ">Aici comenzi vocale.</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function ajaxTest() {
        $.ajax({
            type: "POST",
            url: '<?=PROOT?>home/testAjax',
            data: {
                model_id: 45
            },
            success: function(resp) {
                if (resp.success) {
                    window.alert(resp.data.name);
                }
                console.log(resp);
            }
        });
    }

</script>
<?php $this->end(); ?>
