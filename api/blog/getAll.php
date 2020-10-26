<?php 

    require_once "../../models/init.php";

    jsonHeaders();

    $blogs = Blog::getAllInfo();

    goodHttpResponse();

    echo json_encode(["blogs" => $blogs]);
?>