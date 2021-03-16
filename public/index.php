<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$page_path = '../code/pages/';

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
include $page_path;

?>