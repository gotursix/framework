<?php
use Core\Router;
use Core\H;
use App\Models\Users;
$menu = Router::getMenu('menu_acl');
$currentPage= H::currentPage();
?>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
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
      <div class="dropdown">
        <a  href="" id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item <?php if ($currentPage == PROOT."register/modify"):?> active <?php endif;?>" href="<?=PROOT?>register/modify">Change name</a></li>
          <li><a class="dropdown-item <?php if ($currentPage == PROOT."upload/modify"):?> active <?php endif;?>" href="<?=PROOT?>upload/modify">Delete files</a></li>
          <li><a class="dropdown-item <?php if ($currentPage == PROOT."settings/restore"):?> active <?php endif;?>" href="<?=PROOT?>settings/restore">Recycle Bin</a></li>
          <li><a class="dropdown-item <?php if ($currentPage == PROOT."register/logout"):?> active <?php endif;?>" href="<?=PROOT?>register/logout">Logout</a></li>
        </ul>
      </div>
      <li><a class="nav-link">Hello <?=Users::currentUser()->fname?> <?=Users::currentUser()->lname?></a></li>
      <?php  elseif(!Users::currentUser()): ?>
      <li><a href="<?=PROOT?>register/login" class="nav-link">Login</a></li>
      <li><a href="<?=PROOT?>register/register" class="nav-link">Register</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<span class="snatch-button" data-text="">
        <a class="lwc-chat-button bubble bot" type="button" onclick="startArtyom()" value="Start voice commands"></a>
    </span>

    <span id="output" style="font-size:20px;color:red;"></span>

 <script>
        artyom.addCommands([{
                description: "Artyom can talk too, lets say something if we say hello",
                indexes: ["hello", "hey"],
                action: function(i) {
                    // i = the index of the array of indexes option

                    if (i == 0) {
                        //You say : "hello"
                        document.getElementById('time').innerHTML = "Hello ! How are you? I don't want to talk today";
                    }
                }
            },
            {
                description: "Say goodbye",
                indexes: ["goodbye"],
                action: function() {
                    alert("Now all is over.");
                }
            },
            {
                description: "Say next",
                indexes: ["next"],
                action: function next() {
                    document.getElementById("next").click();
                }
            },
            {
                description: "Say back",
                indexes: ["back"],
                action: function back() {
                    document.getElementById("back").click();
                }
            }
        ]);


        // Redirect the recognized text
        artyom.redirectRecognizedTextOutput(function(text, isFinal) {
            var span = document.getElementById('output');

            if (isFinal) {
                span.innerHTML = '';
            } else {
                span.innerHTML = '';
            }
        });

        function startArtyom() {
            artyom.initialize({
                lang: "en-GB", // More languages are documented in the library
                continuous: false, //if you have https connection, you can activate continuous mode
                debug: true, //Show everything in the console
                listen: true // Start listening when this function is triggered
            });
        }

        function stopArtyom() {
            artyom.fatality();
        }

    </script>