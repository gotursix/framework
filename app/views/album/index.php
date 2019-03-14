<?php
use Core\H;
use Core\Session;
?>
<?php $this->start('body'); ?>
<div class="background">
  <div class="container">

		<div class="content">
			<div class="row">

				<div id="image-grid" class="container-fluid ">

					<div class="whitebg center formerfix">
      <h1 class="center lg-bg col-md-5 mx-auto ">My albums</h1>
      <hr>
      <a href="<?=PROOT?>album/add" class="btn btn-info" >
        Create album
      </a>
      <hr>
    </div>
    <br>
    <div class="row">
      <div class="container center">
        <?= Session::displayMsg() ?>
        <div class="center whitetable">
          <table class="table table-striped ">
            <thead class=" table-dark">
                <th scope="col" class="table-content"><h4>Album name</h4></th>
                <th scope="col" class="table-content"><h4>Album contains</h4></th>
            </thead>
            <tbody>
              <?php foreach ($this->album as $album): ?>
              <tr>
                <td >
                  <br>
                  <a href="<?=PROOT?>contain/details/<?=$album->id ?>" >
                    <h5><font class="album-name"><i><?= strtoupper( $album->name) ;?></i></font></h5>
                  </a>
                </td>
                <td>
                  <br>
                  <?= H::format($album->format) ;?>
                </td>
     
                <?php endforeach; ?>
                <?php if(!$this->album): ?>
                <td colspan="3" class="center">
                  <h1>
                  You have no albums.
                  </h1>
                </td>
                <?php endif; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
      </div>
    </div>
<?php $this->end(); ?>