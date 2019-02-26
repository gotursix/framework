<?php
use Core\Router;
use Core\H;
use App\Models\Users;
  $menu = Router::getMenu('menu_acl');
   $currentPage= H::currentPage();
?>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?=PROOT?>home"><?=MENU_BRAND?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
          <?php foreach($menu as $key => $val):
            $active = ''; ?>
            <?php if(is_array($val)): ?>
              <li class="nav-item dropdown">
                <a href="" id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$key?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php foreach($val as $k => $v):
                    $active = ($v == $currentPage)? 'active':''; ?>
                    <?php if($k == 'separator'): ?>
                      <li role="separator" class="dropdown-divider"></li>
                    <?php else: ?>
                      <li><a class="dropdown-item <?=$active?>" href="<?=$v?>"><?=$k?></a></li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php else:
              $active = ($val == $currentPage)? 'active':''; ?>
              <li><a class=" nav-link <?=$active?>" href="<?=$val?>"><?=$key?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>


        <ul class="nav navbar-nav navbar-right">
        <?php if(Users::currentUser()): ?>
          <li><a class="nav-link">Hello <?=Users::currentUser()->fname?></a></li>
        <?php endif; ?>
      </ul>
  </div>



</nav>
