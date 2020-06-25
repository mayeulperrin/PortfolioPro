<?php
$mobile = FALSE;

$agent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/iPhone/i', $agent)) { $os = "iPhone"; $mobile = TRUE; }
elseif (preg_match('/iPad/i', $agent)) { $os = "iPad"; $mobile = TRUE; }
elseif (preg_match('/Mac/i', $agent)) $os = "Mac";
elseif (preg_match('/Droid/i', $agent)) { $os = "Droid"; $mobile = TRUE; }
elseif (preg_match('/Android/i', $agent)) { $os = "Android"; $mobile = TRUE; }
elseif (preg_match('/Unix/i', $agent)) $os = "Unix";
elseif (preg_match('/Windows/i', $agent)) $os = "Windows";
elseif (preg_match('/Linux/i', $agent)) $os = "Linux";
else $os = 'Unknown';

$body = "body";
$avatar = "avatar";
$div_menu_photo = "div_menu_photo";
$div_header = "div_header";
$div_summary_left = "div_summary_left";
$div_summary_right = "div_summary_right";
$div_body_one_column = "div_body_one_column";
$div_body_two_column_left = "div_body_two_column_left";

if ($mobile == TRUE)
{
    $body = "body_mobile";
    $avatar = "avatar_mobile";
    $div_menu_photo = "div_menu_photo_mobile";
    $div_header = "div_header_mobile";
    $div_summary_left = "div_summary_left_mobile";
    $div_summary_right = "div_summary_right_mobile";
    $div_body_one_column = "div_body_one_column_mobile";
    $div_body_two_column_left = "div_body_two_column_left_mobile";
}
?>