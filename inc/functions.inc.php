<?php

function session_views()
{
    if (!isset($_SESSION['views'])) {
        return $_SESSION['views'] = 0;
    } else {
        $_SESSION['views'] += 1;
        return $_SESSION['views'];
    }
}

// I am leaving the code below for later reference - Bruce, please ignore

// function session_browser_ver()
// {
//     if (!isset($_SESSION['browser'])) {
//         return $_SERVER['HTTP_USER_AGENT'];
//     } else {
//         return $_SERVER['HTTP_USER_AGENT'];
//     }
// }

// function session_login_role()
// {
//     if (!isset($_SESSION['role'])) {
//         return $_SESSION['role'] = 'admin';
//     } else {
//         return 'admin';
//     }
// }

// function display_session_info(){

// echo '<p>Your session ID is: <br><span class="info">' . session_id() . '</span></p>';
// echo '<p>Your current browser version is: <br><span class="info">' . session_browser_ver() . '</span>';
// echo '<p>Your current login role is: <br><span class="info">' . session_login_role() . '</span>';



// echo '<p>The current page views is: <br><span class="info">' . session_views() . '</span></p>';
// }
