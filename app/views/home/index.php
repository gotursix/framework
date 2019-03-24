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

                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                        </ul>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-responsive" src="<?=PROOT?>img/1.jpg" alt="thumb">
                            </div>
                            <div class="carousel-item">
                                <img class="img-responsive" src="<?=PROOT?>img/2.jpg" alt="thumb">
                            </div>
                            <div class="carousel-item">
                                <img class="img-responsive" src="<?=PROOT?>img/3.jpg" alt="thumb">
                            </div>
                            <div class="carousel-item">
                                <img class="img-responsive" src="<?=PROOT?>img/4.jpg" alt="thumb">
                            </div>
                            <div class="carousel-item">
                                <img class="img-responsive" src="<?=PROOT?>img/5.jpg" alt="thumb">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev" id="back">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next" id="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>

                    <h1 class="center ">Aici comenzi vocale.</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
                                </svg>
                            </div>
                            <div class="carousel-item active">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text>
                                </svg>
                            </div>
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text>
                                </svg>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" id="back"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true" id="next"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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
