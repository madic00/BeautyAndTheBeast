<?php 

    require_once "../../models/init.php";

    jsonHeaders();

    if(isset($_POST['btnLogin'])) {
        extract($_POST);

        $errors = [];

        $values = [
            [
                "type" => "input",
                "value" => $email,
                "regex" => "/^[a-zšđčćž\,\/\.\-\_\d\.\!\?]+\@[a-z]+(\.[a-z]+){1,2}$/",
                "example" => "petarpetrovic@gmail.com"
            ],
            [
                "type" => "pass",
                "value" => $pass,
                "min" => 8,
                "max" => 16
            ]
        ];

        foreach($values as $value) {
            if($value['type'] == "input") {
                checkInput($value);
            } else if ($value['type'] == "pass") {
                checkInputPass($value);
            }
        }

        if(count($errors) == 0) {
            $user = User::verify_user($email, $pass);
    
            if($user) {
                $session->login($user);
                $status = true;
                $responseText = "Uspesno ste se ulogovali";

                $errors = null;
                
            } else {
                $responseText = "Pogresna kombinacija username/pass ili niste potvrdili registraciju";
                $status = false;
            }
    
            
        } else {
            $user = null;
            $responseText = "Unesite validne podatke";
            $status = false;
        }
        
        goodHttpResponse();

        $data = ["response" => $user, "responseText" => $responseText, "status" => $status, "errors" => $errors];

    } else {
        badHttpRequest();

        $data = ["response" => null, "error" => "Click submit button on form!"];
    }

    echo json_encode($data);


?>