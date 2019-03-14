<?php
use App\Models\Users;
use Core\Session;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background noselect">
	<br><br>
	<br><br>
	<div class="container center">
		<div class="content alert-fix">
			<?= Session::displayMsg() ?>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center ">
						<h1 class="center lg-bg col-md-5 mx-auto">Delete  images</h1>
						<hr>
						<a href="<?=PROOT?>upload/deleteall/1" class="btn btn-danger">
							Delete all images
						</a>
						<hr>
						<div class="row" id="lightgallery">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php if($upload->format == 1): ?>
							<?php $dir = Users::currentUser()->id; ?>
							<div class="col-lg-3 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
								<img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
								<div class="caption center">
									<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
										<?php echo substr($upload->name, 0 , 25); ?>
										<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
											<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
										</div>
									</div>
									<br>
									<a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
										Delete
									</a>
								</div>
							</div>
							<?php $x++; ?>
							<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<?php if(!$this->upload): ?>
						<h1 class="center">There are no images added.</h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center formerfix">
						<h1 class="center lg-bg col-md-5 mx-auto noselect">Delete  videos</h1>
						<hr>
						<a href="<?=PROOT?>upload/deleteall/2" class="btn btn-danger">
							Delete all videos
						</a>
						<hr>
						<div class="row">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php if($upload->format == 2): ?>
							<?php $dir = Users::currentUser()->id; ?>
							<div class="col-lg-4 col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
								<video class="embed-responsive embed-responsive-16by9" controls>
									<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
									Your browser does not support the video tag.
								</video>
								<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
									<?php echo substr($upload->name, 0 , 25); ?>
									<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
										<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
									</div>
								</div>
								<br>
								<a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
									Delete
								</a>
							</div>
							<?php endif;?>
							<?php $x++; ?>
							<?php endforeach; ?>
						</div>
						<?php if(!$this->upload): ?>
						<h1 class="center">There are no videos added.</h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center formerfix">
						<h1 class="center lg-bg col-md-5 mx-auto noselect">Delete  audios</h1>
						<hr>
						<a href="<?=PROOT?>upload/deleteall/3" class="btn btn-danger" >
							Delete all audio files
						</a>
						<hr>
						<div class="row">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php if($upload->format == 3): ?>
							<?php $dir = Users::currentUser()->id; ?>
							<div class="col-lg-4 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
								<audio controls>
									<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
									Your browser does not support the audio element.
								</audio>
								<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
									<?php echo substr($upload->name, 0 , 25); ?>
									<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
										<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
									</div>
								</div>
								<br>
								<a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
									Delete
								</a>
								<br>
							</div>
							<?php $x++; ?>
							<?php endif;?>
							<?php endforeach; ?>
						</div>
						<?php if(!$this->upload): ?>
						<h1 class="center">There are no audio files added.</h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center formerfix">
						<h1 class="center lg-bg col-md-5 mx-auto noselect">Delete  documents</h1>
						<hr>
						<a href="<?=PROOT?>upload/deleteall/4" class="btn btn-danger" >
							Delete all documents
						</a>
						<hr>
						<div class="row">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php if($upload->format == 4): ?>
							<?php $dir = Users::currentUser()->id; ?>
							<div class="col-lg-3 col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
								<a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
									<img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
									<?= FH::hoverTag($upload->name , substr($upload->name, 0 , 25));?>
								</a>
								<a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
									Delete
								</a>
							</div>
							<?php endif;?>
							<?php $x++; ?>
							<?php endforeach; ?>
						</div>
						<?php if(!$this->upload): ?>
						<h1 class="center">There are no documents added.</h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
</div>
<?php $this->end(); ?>