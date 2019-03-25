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
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."restore/recover"):?> active <?php endif;?>" href="<?=PROOT?>restore/recover" id="recover">Recover password</a></li>
                    <li><a class="dropdown-item <?php if ($currentPage == PROOT."register/logout"):?> active <?php endif;?>" href="<?=PROOT?>register/logout" id="logout">Logout</a></li>
                </ul>
            </div>
            <li><a class="nav-link">Hello <?=Users::currentUser()->fname?> <?=Users::currentUser()->lname?></a></li>
            <?php  elseif(!Users::currentUser()): ?>
            <li><a href="<?=PROOT?>register/login" class="nav-link">Login</a></li>
            <li><a href="<?=PROOT?>restore/recover" class="nav-link">Recover password</a></li>
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
            indexes: ["logout"],
            action: function logout() {
                document.getElementById("logout").click();
            }
        },
        {
            description: "Say recover",
            indexes: ["recover password"],
            action: function recover() {
                document.getElementById("recover").click();
            }
        },
        {
            description: "Say close",
            indexes: ["close"],
            action: function close() {
                document.getElementById("close").click();
            }
        },
        {
            description: "Say download",
            indexes: ["download"],
            action: function download() {
                document.getElementById("lg-download").click();
            }
        },
        {
            description: "Say autoplay",
            indexes: ["autoplay"],
            action: function autoplay() {
                document.getElementById("autoplay").click();
            }
        },
        {
            description: "Say fullscreen",
            indexes: ["full screen"],
            action: function fullscreen() {
                document.getElementById("fullscreen").click();
            }
        },
        {
            description: "Say zoom in",
            indexes: ["zoom in"],
            action: function zoomin() {
                document.getElementById("lg-zoom-in").click();
            }
        },
        {
            description: "Say zoom out",
            indexes: ["zoom out"],
            action: function zoomout() {
                document.getElementById("lg-zoom-out").click();
            }
        },
        {
            description: "Say actual size",
            indexes: ["actual size"],
            action: function actual_size() {
                document.getElementById("lg-actual-size").click();
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
            description: "Say back or previous",
            indexes: ["back", "previous"],
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
            description: "Say delete all files",
            indexes: ["delete all images"],
            action: function delete_all_images() {
                document.getElementById("delete-all-images").click();
            }
        },
        {
            description: "Say delete all files",
            indexes: ["delete all documents"],
            action: function delete_all_documents() {
                document.getElementById("delete-all-documents").click();
            }
        },
        {
            description: "Say delete all files",
            indexes: ["delete all videos"],
            action: function delete_all_videos() {
                document.getElementById("delete-all-videos").click();
            }
        },
        {
            description: "Say delete all files",
            indexes: ["delete all audios"],
            action: function delete_all_audios() {
                document.getElementById("delete-all-audios").click();
            }
        },
        {
            description: "Say restore all files",
            indexes: ["restore all images"],
            action: function restore_all_images() {
                document.getElementById("restore-all-images").click();
            }
        },
        {
            description: "Say restore all files",
            indexes: ["restore all documents"],
            action: function restore_all_documents() {
                document.getElementById("restore-all-documents").click();
            }
        },
        {
            description: "Say restore all files",
            indexes: ["restore all audios"],
            action: function restore_all_audios() {
                document.getElementById("restore-all-audios").click();
            }
        },
        {
            description: "Say restore all files",
            indexes: ["restore all videos"],
            action: function restore_all_videos() {
                document.getElementById("restore-all-videos").click();
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
