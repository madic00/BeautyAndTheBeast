<?php 

    require_once "models/init.php";

    $session->logout();

    redirect("index.php");