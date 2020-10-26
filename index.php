<?php 

    ob_start();

    require_once "models/init.php";

    if(!isset($_GET['page'])) {
        $page = "home";
    } else {
        $page = $_GET['page'];
    }

    include "views/fixed/header.php";
    include "views/fixed/navbar.php";

    include "views/pages/{$page}.php";
    include "views/fixed/footer.php";



?>
