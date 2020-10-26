<?php 

    require_once "../../models/init.php";

    jsonHeaders();

    if(isset($_POST['btnRegister'])) {
        extract($_POST);

        $errors = [];

        $values = [
            [
                "type" => "input",
                "value" => $firstName,
                "regex" => "/^[A-ZŠĐČĆŽ][a-zšđčćž]{2,19}(\s[A-ZŠĐČĆŽ][a-zšđčćž]{3,19})?$/",
                "example" => "Vaše ime mora početi velikim slovom i ne sme imati
                brojeve. <br /> Mora imati više od 2 slova, i manje od 20 slova. <br /> Ako vaše ime sadrži dve reči,
                svaka reč počinje velikim slovom. Npr : Ana Marija"
            ],
            [
                "type" => "input",
                "value" => $lastName,
                "regex" => "/^[A-ZŠĐČĆŽ][a-zšđčćž]{2,19}(\s[A-ZŠĐČĆŽ][a-zšđčćž]{3,19})?$/",
                "example" => "Vaše prezime mora početi velikim slovom i ne sme imati
                brojeve. <br /> Mora imati više od 2 slova, i manje od 20 slova. <br /> Ako vaše prezime sadrži dve reči,
                svaka reč počinje velikim slovom. Npr : Hadzi Ristić"
            ],
            [
                "type" => "input",
                "value" => $city,
                "regex" => "/^[A-ZŠĐČĆŽ][a-zšđčćž]+(\s[A-ZŠĐČĆŽ][a-zšđčćž]+){0,2}$/",
                "example" => "Grad mora početi velikim slovom. <br /> Ako Vaš grad ima više
                reči u imenu, svaka reč mora početi velikim slovom, npr : Novi Pazar, Novi Sad, ..."
            ],
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
            $newUser = new User();
            $newUser->firstName = $firstName;
            $newUser->lastName = $lastName;
            $newUser->city = $city;
            $newUser->email = $email;
            $newUser->pass = $pass; #md5
            $newUser->activationCode = sha1(md5(time().md5($email).rand(1, 10000000)));
            $newUser->createdAt = date("Y-m-d H:i:s");
    
            $result = $newUser->save();
    
            if($result) {
                $status = true;
                $error = "";
    
                $responseText = "Uspesno ste se prijavili " . $newUser->email . ". Proverite email da potvrdite registraciju.";
    
                // mejl za verifikaciju
            } else {
                $status = false;
                $responseText = "Neko je već registrovan sa tim email-om. Pokušajte drugi!";
            }

            $errors = null;

        } else {
            $status = false;
            $responseText = "Niste uneli sve parametre u ispravnom formatu";
            $newUser = null;
        }


        goodHttpResponse();

        $data = ["response" => $newUser, "responseText" => $responseText, "status" => $status, "errors" => $errors];

    } else {
        badHttpRequest();

        $data = ["response" => null, "error" => "Posaljite formu prvo!"];
    }

    echo json_encode($data);


?>