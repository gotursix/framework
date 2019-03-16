<?php
use Core\Router;
use Core\H;
use App\Models\Users;
$menu = Router::getMenu('menu_acl');
$currentPage= H::currentPage();
?>

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="<?=PROOT?>home" id="home"><?=MENU_BRAND?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach($menu as $key => $val): $active = ''; ?>
            <?php if(is_array($val)): ?>
            <li class="nav-item dropdown">
                <a href="" id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$key?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php foreach($val as $k => $v):
          $active = ($v == $currentPage)? 'active':''; ?>
                    <?php if($k == 'separator'): ?>
                    <li role="separator" class="dropdown-divider"></li>
                    <?php else: ?>
                    <li><a class="dropdown-item <?=$active?>" href="<?=$v?>" id="<?=strtolower($k)?>"><?=$k?></a></li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php else:
                 $active = ($val == $currentPage)? 'active':''; ?>
            <li><a class=" nav-link <?=$active?>" href="<?=$val?>" id="<?=strtolower($key)?>"><?=$key?></a></li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>



        <ul class="nav navbar-nav navbar-right">
            <?php if(Users::currentUser()): ?>
            <div class="dropdown">
                <a href="" id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."register/modify"):?> active <?php endif;?>" href="<?=PROOT?>register/modify" id="name">Change name</a></li>
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."upload/modify"):?> active <?php endif;?>" href="<?=PROOT?>upload/modify" id="delete">Delete files</a></li>
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."settings/restore"):?> active <?php endif;?>" href="<?=PROOT?>settings/restore" id="recycle">Recycle Bin</a></li>
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."register/logout"):?> active <?php endif;?>" href="<?=PROOT?>register/logout" id="logout">Logout</a></li>
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


<?php if(Users::currentUser() &&  preg_match('/(Chrome|CriOS)\//i',$_SERVER['HTTP_USER_AGENT']) && !preg_match('/(Aviator|ChromePlus|coc_|Dragon|Edge|Flock|Iron|Kinza|Maxthon|MxNitro|Nichrome|OPR|Perk|Rockmelt|Seznam|Sleipnir|Spark|UBrowser|Vivaldi|WebExplorer|YaBrowser)/i',$_SERVER['HTTP_USER_AGENT']) )	: ?>

<span class="snatch-button" data-text="">
    <a class="lwc-chat-button bubble bot" onclick="startArtyom()" value="Start voice commands"></a>
</span>
<span id="output" style="font-size:20px;color:red;"></span>

<script>
    artyom.addCommands([{
            description: "Say logout",
            indexes: ["log out"],
            action: function logout() {
                document.getElementById("logout").click();
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
            description: "Say remove from album",
            indexes: ["remove from album"],
            action: function remove() {
                document.getElementById("remove-from-album").click();
            }
        },
        {
            description: "Say add to album",
            indexes: ["add to album"],
            action: function add() {
                document.getElementById("add-to-album").click();
            }
        },
        {
            description: "Say back",
            indexes: ["back"],
            action: function back() {
                document.getElementById("back").click();
            }
        },
        {
            description: "Say create album",
            indexes: ["create album"],
            action: function create() {
                document.getElementById("create").click();
            }
        },
        {
            description: "Say edit album",
            indexes: ["edit album"],
            action: function edit() {
                document.getElementById("edit").click();
            }
        },
        {
            description: "Say go to images",
            indexes: ["go to images"],
            action: function images() {
                document.getElementById("images").click();
            }
        },
        {
            description: "Say go to videos",
            indexes: ["go to videos"],
            action: function videos() {
                document.getElementById("videos").click();
            }
        },
        {
            description: "Say go to audios",
            indexes: ["go to audios"],
            action: function audios() {
                document.getElementById("audios").click();
            }
        },
        {
            description: "Say go to documents",
            indexes: ["go to documents"],
            action: function documents() {
                document.getElementById("documents").click();
            }
        },
        {
            description: "Say change my name",
            indexes: ["change my name"],
            action: function my_name() {
                document.getElementById("my-name").click();
            }
        },
        {
            description: "Say change name",
            indexes: ["change name"],
            action: function name() {
                document.getElementById("name").click();
            }
        },
        {
            description: "Say delete files",
            indexes: ["delete"],
            action: function deletes() {
                document.getElementById("delete").click();
            }
        },
        {
            description: "Say delete all files",
            indexes: ["delete all"],
            action: function delete_all() {
                document.getElementById("delete-all").click();
            }
        },
        {
            description: "Say restore files",
            indexes: ["restore"],
            action: function restore() {
                document.getElementById("restore").click();
            }
        },
        {
            description: "Say restore all files",
            indexes: ["restore all"],
            action: function restore_all() {
                document.getElementById("restore-all").click();
            }
        },
        {
            description: "Say upload",
            indexes: ["upload"],
            action: function upload() {
                document.getElementById("upload").click();
            }
        },
        {
            description: "Say edit album",
            indexes: ["edit album"],
            action: function edit_album() {
                document.getElementById("edit-album").click();
            }
        },
        {
            description: "Say album",
            indexes: ["album"],
            action: function album() {
                document.getElementById("albums").click();
            }
        },
        {
            description: "Say go to recycle bin",
            indexes: ["recycle bin"],
            action: function recycle() {
                document.getElementById("recycle").click();
            }
        },
        {
            description: "Say home",
            indexes: ["home"],
            action: function homes() {
                document.getElementById("home").click();
            }
        },
        {
            description: "Say submit, save",
            indexes: ["submit", "save"],
            action: function save() {
                document.getElementById("save").click();
            }
        },
        {
            description: "Say cancel",
            indexes: ["cancel"],
            action: function cancel() {
                document.getElementById("cancel").click();
            }
        },
        {
            description: "Say cyka blyat",
            indexes: ["Suka blyat"],
            action: function cyka_blyat() {
                var win = window.open('https://www.youtube.com/watch?v=vNXgknozyhw&t=49s', '_blank');
                if (win) {
                    //Browser has allowed it to be opened
                    win.focus();
                }
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
<?php endif;?>
