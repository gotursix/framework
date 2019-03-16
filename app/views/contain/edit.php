<?php
use Core\H;
use App\Models\Album ;
use App\Models\Users ;
use App\Models\Contain ;
use Core\FH ;
?>
<?php $this->setSiteTitle('Edit Album'); ?>
<?php $this->start('body'); ?>
<div class="background">
	<div class="container">
		<div class="content">
			<div class="row">
				<div id="image-grid" class="container-fluid ">
					<div class="whitebg center formerfix">
						<h1 class=" center lg-bg col-md-5 mx-auto ">Album: <font class="album-name"><i><?= $this->album->name ?></i></font></h1>
						<br>
						<h4 class="head-form col-md-5 mx-auto top center ">Files in album</h4>
						<div id="image-grid" class="container-fluid ">
							<hr>
							<a href="<?=PROOT?>album" class="btn-reg btn-primary">Save</a>
							<a href="<?=PROOT?>album/delete/<?=$this->album->id?>" class="btn btn-danger" onclick="if(!confirm('Are you sure ? By deleting it you can not recover it.')){return false;}">Delete album
							</a>
							<a href="<?=PROOT?>album/edit/<?=$this->album->id?>" class="btn-reg btn-primary">
								Change name
							</a>
							<hr>
							<?php if (!$this->contain): ?>
							<h1 class="center ">There are no files in the album.</h1>
							<?php endif; ?>
							<div class="row">
								<?php if ($this->album->format == 1): ?>
								<?php $x=1; ?>
								<?php foreach ($this->contain as $upload): ?>
								<?php $dir = Users::currentUser()->id; ?>
								

						   <?php if(FH::count($this->contain) >=4):  ?>
           				   <div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
         				   <?php endif;?>
         			       <?php if(FH::count($this->contain) == 3):  ?>
          			      <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
         			       <?php endif;?>
           			       <?php if(FH::count($this->contain) == 2):  ?>
         		 	      <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              			  <?php endif;?>
                   		  <?php if(FH::count($this->contain) == 1):  ?>
                  		  <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
 						  <?php endif;?>

						



									<img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
									<br>
									<a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>
								</div>
								<?php $x++; ?>
								<?php endforeach; ?>
								<?php endif; ?>
								<?php if ($this->album->format == 2): ?>
								<?php $x=1; ?>
								<?php foreach ($this->contain as $upload): ?>
								<?php $dir = Users::currentUser()->id; ?>
								<div class="col-lg-4 mx-auto col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
									<video class="embed-responsive embed-responsive-16by9" controls>
										<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
										Your browser does not support the video tag.
									</video>
									<div class="caption center">
										<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
											<?php echo substr($upload->name, 0 , 25); ?>
											<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
												<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
											</div>
											</div>										<a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>
										</div>
									</div>
									<?php $x++; ?>
									<?php endforeach; ?>
									<?php endif; ?>
									<?php if ($this->album->format == 3): ?>
									<?php $x=1; ?>
									<?php foreach ($this->contain as $upload): ?>
									<?php $dir = Users::currentUser()->id; ?>
									<div class="col-lg-4 mx-auto col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<audio controls>
											<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
											Your browser does not support the audio element.
										</audio>
										<div class="caption text-center">
											<p><?=$upload->name ?></p>
											<a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>
										</div>
									</div>
									<?php $x++; ?>
									<?php endforeach; ?>
									<?php endif; ?>
									<?php if ($this->album->format == 4): ?>
									<?php $x=1; ?>
									<?php foreach ($this->contain as $upload): ?>
									<?php $dir = Users::currentUser()->id; ?>
									
								    <?php if(FH::count($this->contain) >=4):  ?>
           				 			<div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>"title="<?=$upload->name?>">
         						   <?php endif;?>
         			  			   <?php if(FH::count($this->contain) == 3):  ?>
          			     		   <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>"title="<?=$upload->name?>">
         			               <?php endif;?>
           			               <?php if(FH::count($this->contain) == 2):  ?>
         		 	               <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>"title="<?=$upload->name?>">
              			           <?php endif;?>
                   		            <?php if(FH::count($this->contain) == 1):  ?>
                  		           <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>"title="<?=$upload->name?>">
 						           <?php endif;?>

										<a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
											<img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
											<p><?=$upload->name ?></p>
										</a>
										<a href="<?=PROOT?>contain/delete/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-danger btn-xs">Remove from album</a>
									</div>
									<?php $x++; ?>
									<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
						
						<div class="whitebg center formerfix">
							<h4 class="head-form col-md-5 mx-auto top center ">Select your files</h4>
							<hr>
							<div id="image-grid" class="container-fluid ">
								<?php if (!$this->upload): ?>
								<br>
								<h1 class="center ">There are no files to be added in the album.</h1>
								<?php endif; ?>
								<div class="row" >
									<?php if ($this->album->format == 1): ?>
									<?php $x=1; ?>
									<?php foreach ($this->upload as $upload): ?>
									<?php $dir = Users::currentUser()->id; ?>
								
									<?php if(FH::count($this->upload) >=4):  ?>
           				            <div class="col-lg-3 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
         				            <?php endif;?>
         			                <?php if(FH::count($this->upload) == 3):  ?>
          			                <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
         			                <?php endif;?>
           			                <?php if(FH::count($this->upload) == 2):  ?>
         		 	                <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
              			            <?php endif;?>
                   		            <?php if(FH::count($this->upload) == 1):  ?>
                  		            <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
 						            <?php endif;?>


										<img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
										<br>
										<a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
									</div>
									<?php $x++; ?>
									<?php endforeach; ?>
									<?php endif; ?>
									<?php if ($this->album->format == 2): ?>
									<?php $x=1; ?>
									<?php foreach ($this->upload as $upload): ?>
									<?php $dir = Users::currentUser()->id; ?>
									<div class="col-lg-4 mx-auto col-xs-6 custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
										<video class="embed-responsive embed-responsive-16by9" controls>
											<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
											Your browser does not support the video tag.
										</video>
										<div class="caption center">
											<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
												<?php echo substr($upload->name, 0 , 25); ?>
												<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
													<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
												</div>
												</div>							<a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
											</div>
										</div>
										<?php $x++; ?>
										<?php endforeach; ?>
										<?php endif; ?>
										<?php if ($this->album->format == 3): ?>
										<?php $x=1; ?>
										<?php foreach ($this->upload as $upload): ?>
										<?php $dir = Users::currentUser()->id; ?>
										<div class="col-lg-4 col-xs-6 mx-auto custom-col"  data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>">
											<video class="embed-responsive embed-responsive-16by9" controls>
												<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4" alt="Thumb-<?=$x?>" class="img-responsive" />
												Your browser does not support the video tag.
											</video>
											<div class="caption center">
												<div class="caption center word-break margin-file" data-toggle="collapse" href="#collapseExample<?=$x ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
													<?php echo substr($upload->name, 0 , 25); ?>
													<div class="collapse  word-break margin-file" id="collapseExample<?=$x ?>">
														<?php if(strlen($upload->name)>25) echo substr($upload->name, -strlen($upload->name)+25 , strlen($upload->name)); ?>
													</div>
													</div>										
													<a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
												</div>
											</div>
											<?php $x++; ?>
											<?php endforeach; ?>
											<?php endif; ?>
											<?php if ($this->album->format == 4): ?>
											<?php $x=1; ?>
											<?php foreach ($this->upload as $upload): ?>
											<?php $dir = Users::currentUser()->id; ?>
											
											<?php if(FH::count($this->upload) >=4):  ?>
           				       			    <div class="col-lg-3  mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
         				       		        <?php endif;?>
         			                       <?php if(FH::count($this->upload) == 3):  ?>
          			                       <div class="col-lg-4 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
         			                        <?php endif;?>
           			                      <?php if(FH::count($this->upload) == 2):  ?>
         		 	                      <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
              			                  <?php endif;?>
                   		                  <?php if(FH::count($this->upload) == 1):  ?>
                  		                  <div class="col-lg-5 mx-auto col-xs-6 custom-col" data-src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" data-sub-html="<h4><?=$upload->name ?></h4>" title="<?=$upload->name?>">
 						                  <?php endif;?>

 						              	  <a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">
													<img src="<?= PROOT . 'img' . DS . 'document.png' ;?>" alt="Thumb-<?=$x?>" class="img-responsive" />
													<p><?=$upload->name ?></p>
												</a>
												<a href="<?=PROOT?>contain/add/<?=$upload->id?>/<?= $this->album->id ?>" class="btn btn-info btn-xs">Add to album</a>
											</div>
											<?php $x++; ?>
											<?php endforeach; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php $this->end(); ?>