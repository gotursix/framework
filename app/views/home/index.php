<?php
use Core\Session;
use Core\FH;
use App\Models\Users;
?>
<?php $this->setSiteTitle('Home'); ?>
<?php $this->start('body'); ?>
<div class="background">
    <div class="container">
        <div class="content">
            <div class="row">
                <div id="image-grid" class="container-fluid ">
                    <div class="my-margin">

                        <div class="whitebg center formerfix">
                            <div class="carousel-margin">
                                <h1 class="center lg-bg mx-auto ">Welcome to Rufus Framework</h1>

                                <!--<div class="center" onclick="ajaxTest();">Button me :>></div>-->

                                <div id="demo" class="carousel slide m-top" data-ride="carousel">

                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                        <li data-target="#demo" data-slide-to="3"></li>
                                        <li data-target="#demo" data-slide-to="4"></li>
                                        <li data-target="#demo" data-slide-to="5"></li>
                                    </ul>

                                    <div class="carousel-inner" data-interval="5000">
									
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
										
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev" id="back">
                                            <span class="carousel-control-prev-icon" id="back"></span>
                                        </a>
										
                                        <a class="carousel-control-next" href="#demo" data-slide="next" id="next">
                                            <span class="carousel-control-next-icon" id="next"></span>
                                        </a>
										
                                    </div>
									
                                </div>
                                <br>
                                <br>
                                	<div class="center mx-auto"><h1 class="center ">Voice commands</h1></div>
								<!--
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								
                                    <div class="carousel-inner" data-interval="5000">
									
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">logout</text>
                                            </svg>
                                        </div>
										
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="20%" y="50%" fill="#000" dy=".3em" class="display-4">recover password</text>
                                            </svg>
                                        </div>
										
                                        <div class="carousel-item active">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">close</text>
                                            </svg>
                                        </div>
										
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="38%" y="50%" fill="#000" dy=".3em" class="display-4">download</text>
                                            </svg>
                                        </div>
										
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="38%" y="50%" fill="#000" dy=".3em" class="display-4">autoplay</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="36%" y="50%" fill="#000" dy=".3em" class="display-4">full screen</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="36%" y="50%" fill="#000" dy=".3em" class="display-4">zoom in</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="36%" y="50%" fill="#000" dy=".3em" class="display-4">zoom out</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="36%" y="50%" fill="#000" dy=".3em" class="display-4">actual size</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">next</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="17%" y="50%" fill="#000" dy=".3em" class="display-4">remove from album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="31%" y="50%" fill="#000" dy=".3em" class="display-4">add to album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">back</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">previous</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="33%" y="50%" fill="#000" dy=".3em" class="display-4">create album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="34%" y="50%" fill="#000" dy=".3em" class="display-4">edit album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="31%" y="50%" fill="#000" dy=".3em" class="display-4">go to images</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="31%" y="50%" fill="#000" dy=".3em" class="display-4">go to videos</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="31%" y="50%" fill="#000" dy=".3em" class="display-4">go to audios</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="24%" y="50%" fill="#000" dy=".3em" class="display-4">go to documents</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="26%" y="50%" fill="#000" dy=".3em" class="display-4">change my name</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="28%" y="50%" fill="#000" dy=".3em" class="display-4">change name</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">delete all images</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="13%" y="50%" fill="#000" dy=".3em" class="display-4">delete all documents</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">delete all audios</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">delete all videos</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">restore all images</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="13%" y="50%" fill="#000" dy=".3em" class="display-4">restore all documents</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">restore all videos</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="18%" y="50%" fill="#000" dy=".3em" class="display-4">restore all audios</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">upload</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="34%" y="50%" fill="#000" dy=".3em" class="display-4">edit album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">album</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="34%" y="50%" fill="#000" dy=".3em" class="display-4">recycle bin</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">home</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">submit</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">save</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">cancel</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                <title>Say</title>
                                                <rect width="100%" height="100%" fill="#fff"></rect><text x="37%" y="50%" fill="#000" dy=".3em" class="display-4">recover</text>
                                            </svg>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" id="back">
                                        <span class="carousel-control-prev-icon" aria-hidden="true" id="back"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" id="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true" id="next"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>-->
								
								
								<div class="row m-top mx-auto center home-list">
										
									
										
										<div class="col">
										<ul class="list-group">
											<li class="list-group-item">actual size</li>
											<li class="list-group-item">add to album</li>
											<li class="list-group-item">album</li>
											<li class="list-group-item">autoplay</li>
											<li class="list-group-item">back</li>
											<li class="list-group-item">cancel</li>
											<li class="list-group-item">change name</li>
											<li class="list-group-item">close</li>
											<li class="list-group-item">create album</li>
											<li class="list-group-item">delete all audios</li>
											<li class="list-group-item">delete all documents</li>
											<li class="list-group-item">delete all images</li>
											<li class="list-group-item">delete all videos</li>
											<li class="list-group-item">download</li>
											<li class="list-group-item">edit album</li>
											<li class="list-group-item">full screen</li>
											<li class="list-group-item">go to audios</li>
											<li class="list-group-item">go to documents</li>
											</ul>
										</div>
										<div class="col">
										<ul class="list-group">
											<li class="list-group-item">go to images</li>
											<li class="list-group-item">go to videos</li>
											<li class="list-group-item">home</li>
											<li class="list-group-item">logout</li>
											<li class="list-group-item">next</li>
											<li class="list-group-item">previous</li>
											<li class="list-group-item">recover password</li>
											<li class="list-group-item">recycle bin</li>
											<li class="list-group-item">remove from album</li>
											<li class="list-group-item">restore all audios</li>
											<li class="list-group-item">restore all documents</li>
											<li class="list-group-item">restore all images</li>
											<li class="list-group-item">restore all videos</li>
											<li class="list-group-item">save</li>
											<li class="list-group-item">submit</li>
											<li class="list-group-item">upload</li>
											<li class="list-group-item">zoom in</li>
											<li class="list-group-item">zoom out</li>
											</ul>
										</div>
									
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
