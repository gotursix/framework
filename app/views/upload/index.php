<?php
use App\Models\Users;
use Core\Session;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background ">
	<br><br>
	<br><br>
	<div class="container center">
		<div class="content alert-fix">
			<?= Session::displayMsg() ?>
		</div>
	</div>
	<?php if(FH::number($this->upload , 1)>0):  ?>
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center ">
						<h1 class="center lg-bg col-md-5 mx-auto">Delete  images</h1>
						<hr>
						<a href="<?=PROOT?>upload/deleteall/1" class="btn btn-danger" onclick="if(!confirm('Are you sure ?')){return false;}">
							Delete all images
						</a>
						<hr>
						<div class="row" id="lightgallery">
							<?php $x=1; ?>
							<?php foreach ($this->upload as $upload): ?>
							<?php if($upload->format == 1): ?>
							<?php $dir = Users::currentUser()->id; ?>

							<?php if(FH::number($this->upload , 1) >=4):  ?>
							<div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
							<?php endif;?>
							<?php if(FH::number($this->upload , 1) == 3):  ?>
							<div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
							<?php endif;?>
							<?php if(FH::number($this->upload , 1) == 2):  ?>
							<div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
							<?php endif;?>
							<?php if(FH::number($this->upload , 1) == 1):  ?>
							<div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
							<?php endif;?>

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
				<?php endif;?>
				<?php if(FH::number($this->upload , 2)>0):  ?>
				<div class="container">
					<div class="content">
						<div class="row">
							<div id="image-grid" class="container-fluid ">
								<div class="whitebg center <?php if(FH::number($this->upload , 1)>0):  ?>formerfix<?php endif;?>">
									<h1 class="center lg-bg col-md-5 mx-auto ">Delete  videos</h1>
									<hr>
									<a href="<?=PROOT?>upload/deleteall/2" class="btn btn-danger" onclick="if(!confirm('Are you sure ?')){return false;}">
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
				<?php endif;?>
				<?php if(FH::number($this->upload , 3)>0):  ?>
				<div class="container">
					<div class="content">
						<div class="row">
							<div id="image-grid" class="container-fluid ">
								<div class="whitebg center <?php if(FH::number($this->upload , 2)>0):  ?>formerfix<?php endif;?>">
									<h1 class="center lg-bg col-md-5 mx-auto ">Delete  audios</h1>
									<hr>
									<a href="<?=PROOT?>upload/deleteall/3" class="btn btn-danger"  onclick="if(!confirm('Are you sure ?')){return false;}">
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
				<?php endif;?>
				<?php if(FH::number($this->upload , 4)>0):  ?>
				<div class="container">
					<div class="content">
						<div class="row">
							<div id="image-grid" class="container-fluid ">
								<div class="whitebg center <?php if(FH::number($this->upload , 3)>0):  ?>formerfix<?php endif;?>">
									<h1 class="center lg-bg col-md-5 mx-auto ">Delete  documents</h1>
									<hr>
									<a href="<?=PROOT?>upload/deleteall/4" class="btn btn-danger" onclick="if(!confirm('Are you sure ?')){return false;}"	 >
										Delete all documents
									</a>
									<hr>
									<div class="row center">
										<?php $x=1; ?>
										<?php foreach ($this->upload as $upload): ?>
										<?php if($upload->format == 4): ?>
										<?php $dir = Users::currentUser()->id; ?>
										
										<?php if(FH::number($this->upload , 4) >=4):  ?>
										<div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name ?>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 4) == 3):  ?>
										<div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name ?>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 4) == 2):  ?>
										<div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name ?>">
										<?php endif;?>
										<?php if(FH::number($this->upload , 4) == 1):  ?>
										<div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name ?>">
										<?php endif;?>
														
														<a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
															<img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
															<?=substr($upload->name, 0 , 25);?>
															<br>
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
							<?php endif;?>
							<?php if(FH::number($this->upload , 1)+FH::number($this->upload , 2)+FH::number($this->upload , 3)+FH::number($this->upload , 4)==0):  ?>
							<div class="container">
								<div class="content">
									<div class="row">
										<div id="image-grid" class="container-fluid ">
											<div class="whitebg center <?php if(FH::number($this->upload , 1)>0):  ?>formerfix<?php endif;?>">
												<h1 class="center lg-bg col-md-5 mx-auto ">Delete  files</h1>
												<hr>
												<a href="<?=PROOT?>settings/restore" class="btn btn-primary">
													Restore files
												</a>
												<hr><br>
												<h1 class="center">You have no uploaded files.</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif;?>
							<br>
							<br>
						</div>
						<?php $this->end(); ?>