<?php
require_once('function.php');

$page_content = include_template('index.php',
    [
        'categories_list' => $categories_list,
        'announcements_list' => $announcements_list
    ]);
$layout_content = include_template('layout.php',
    [
        'page_title' => 'Главная страница',
        'is_auth' => $is_auth,
        'user_avatar' => $user_avatar,
        'user_name' => $user_name,
        'page_content'=> $page_content,
        'categories_list' => $categories_list
    ]);
print($layout_content);
