<?php 

    require_once "../../models/init.php";

    // jsonHeaders();

    if(isset($_POST['newComBtn'])) {
        extract($_POST);

        $newCom = new Comment();
        $newCom->idBlog = $blogId;
        $newCom->idUser = $userId;
        $newCom->parentCommentId = $parentComId;
        $newCom->content = $content;
        $newCom->createdAt = date("Y-m-d H:i:s");

        $res = $newCom->insert();

        if($res) {
            $status = true;
            $error = "";

            $responseText = "Uspesno ste odgovorili na komentar!";
        } else {
            $status = false;
            $error = "";

            $responseText = "Komentar nije zabeležen. Pokusajte ponovo da odgovorite!";
        }

        goodHttpResponse();

        $data = ["response" => $newCom, "responseText" => $responseText, "status" => $status, "errors" => $errors];


    } else {
        badHttpRequest();

        $data = ["response" => null, "error" => "Posaljite formu prvo!"];
    }

    echo json_encode($data);


?>