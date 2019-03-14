<?php
use App\Models\Users;
use App\Models\Upload;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background ">
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center formerfix">
						<h1 class="center lg-bg col-md-5 mx-auto ">My images</h1>
						<hr>
						<a href="<?=PROOT?>upload/add" class="btn btn-info">
							Upload files
						</a>
						<a href="<?=PROOT?>upload/modify" class="btn btn-danger">
							Delete files
						</a>
						<a href="<?=PROOT?>album/create/1" class="btn btn-info">
							Create album
						</a>
						<hr>
						<div class="row" id="lightgallery">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php $dir = Users::currentUser()->id; ?>
							

										<?php if(FH::number($this->upload , 1) >=4):  ?>
										<div class="col-lg-3 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 1) == 3):  ?>
										<div class="col-lg-4 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 1) == 2):  ?>
										<div class="col-lg-5 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 1) == 1):  ?>
										<div class="col-lg-5 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<?php endif;?>


								<a href="#" data-toggle="modal" data-target="#modal-preso" class="img-button">
									<img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
									<div class="caption center">
										<p><?php echo substr($upload->name, 0 , 25); ?></p>
									</div>
								</a>
							</div>
							<?php $x++; ?>
							<?php endforeach; ?>
						</div>
						<?php if(!$this->upload): ?>
						<h1 class="center">There are no images added.</h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
		<script>
			lightGallery(document.getElementById('lightgallery'));
		</script>
	</div>
</div>
<?php $this->end(); ?>