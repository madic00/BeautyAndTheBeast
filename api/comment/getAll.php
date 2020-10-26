<?php 

    require_once "../../models/init.php";

    // jsonHeaders();

    if(isset($_GET['blog'])) {
        $blog = $_GET['blog'];

        $comments = Comment::getParentComments($blog);
    
        $childComments = Comment::getChildComments($blog);
    
        goodHttpResponse();

        $data = ["comments" => $comments, "childComments" => $childComments];

    } else {

        badHttpRequest();

        $data = ["error" => "Izaberite ispravan blog post!"];

    }


    echo json_encode($data);

?>