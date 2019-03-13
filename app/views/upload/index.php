<?php
use App\Models\Users;
use Core\Session;
use Core\FH;
?>
<?php $this->start('body'); ?>
<div class="background noselect">

	<div class="container">

		<div class="content">
			<div class="row">

				<div id="image-grid" class="container-fluid ">

					<div class="whitebg center formerfix">
						<h1 class="center lg-bg col-md-5 mx-auto">My images</h1>
						<hr>
						<a href="<?=PROOT?>upload/modify" class="btn btn-danger">
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
									<p><?php echo substr($upload->name, 0 , 25); ?></p>

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
</div>



<?php foreach ($this->upload as $upload): ?>

<?= $upload->name;?>

<?php $dir = Users::currentUser()->id; ?>

<?php if($upload->format == 1): ?>
<img src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" class="img-responsive">
<?php endif; ?>

<?php if($upload->format == 2): ?>
<video class="img-responsive" controls>
	<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="video/mp4">
	Your browser does not support the video tag.
</video>
<?php endif; ?>

<?php if($upload->format == 3): ?>
<audio controls>
	<source src="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>
<?php endif; ?>

<?php if($upload->format == 4): ?>
<a href="<?= PROOT . 'files' . DS . $dir  . DS . $upload->name ;?>" target="_blank">View the pdf</a>
<?php endif; ?>
<a href="<?=PROOT?>upload/delete/<?=$upload->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure ?')){return false;}">
	Delete
</a>
<?php endforeach; ?>

<?php if(!$this->upload): ?>
<h1>
	You don't have any file.
</h1>
<?php endif; ?>
</div>
<br>
</div>
</div>
</div>
<script>
	var $rows = $('#table tr');
	$('#search').keyup(function() {
		var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
			reg = RegExp(val, 'i'),
			text;
		$rows.show().filter(function() {
			text = $(this).text().replace(/\s+/g, ' ');
			return !reg.test(text);
		}).hide();
	});
</script>
<?php $this->end(); ?>
