<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

if (isset($_GET['page'])) {
    if ($_GET['page'] === "questions") {
        include "../code/pages/questions.php";
    }
}

?>