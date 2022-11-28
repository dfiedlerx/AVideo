<?php
global $global, $config;

// is online
// recorder
// live users

$global['ignoreUserMustBeLoggedIn'] = 1;
if (!isset($global['systemRootPath'])) {
    $configFile = '../../videos/configuration.php';
    require_once $configFile;
}
User::loginFromRequest();
$html = '';
if (User::isLogged()) {
    $users_id = User::getId();
    if (AVideoPlugin::isEnabledByName('Chat2')) {
        $room_users_id = $users_id;
        $live_transmitions_history_id = Live::getLiveTransmitionObjectFromUsers_id($users_id);
        $iframe = 1;
        $noFade = 1;
        $bubblesOnly = 1;
        $getLogin = 1;
        $addChatTextBox = 1;

        $iframeURL = Chat2::getChatRoomLinkWithParameters($room_users_id, $live_transmitions_history_id, $iframe, $noFade, $bubblesOnly, $getLogin, $addChatTextBox);

        $html = '<iframe 
        id="yptchat2Iframe"
        src="' . $iframeURL . '" 
        frameborder="0" scrolling="no" title="chat widget" 
        allowtransparency="true" 
        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-forms allow-modals allow-orientation-lock allow-pointer-lock allow-presentation allow-top-navigation"
        style="
        outline: none; 
        visibility: visible; 
        resize: none; 
        box-shadow: none; 
        overflow: visible; 
        background: none transparent; 
        opacity: 1; 
        padding: 0px; 
        margin: 0px; 
        transition-property: none; 
        transform: none; 
        width: 100%; 
        z-index: 999999; 
        cursor: auto; 
        float: none; 
        border-radius: unset; 
        pointer-events: auto; 
        display: block; 
        height: 100vh;"></iframe>';

        //include "{$global['systemRootPath']}plugin/Chat2/index.php";
        //return false;
    }
}
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <?php
        include $global['systemRootPath'] . 'view/include/head.php';
        ?>
        <style>
            #accessibility-toolbar, footer{
                display: none !important;
            }
            body {
                padding: 0;
            }
        </style>
    </head>

    <body style="background-color: red;">
        <?php
        echo $html;
        ?>
        <?php
        include $global['systemRootPath'] . 'view/include/footer.php';
        ?>
    </body>
</html>