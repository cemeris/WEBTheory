<?php
const BASE = '../code/';
const CONFIG_FILE = '../code/config.json';

$page_path = BASE . 'pages/';
$settings = [];

if (file_exists(CONFIG_FILE)) {
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'questions':
                $page_path .= "questions.php";
                break;
        }
    }
    else {
        $page_path .= "main.php";
    }
}
else {
    $page_path .= 'install.php';
}

if (!isset($settings['debug_mode']) || $settings['debug_mode']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
include $page_path;

?>