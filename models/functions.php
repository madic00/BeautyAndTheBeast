<?php 

    // OLD PHP VERSION

    // function __autoload($class) {
    //     $class = strtolower($class);
    //     $path = "includes/{$class}.php";

    //     if(file_exists($path)) {
    //         require_once $path;
    //     } else {
    //         die("This file named {$class}.php was not found");
    //     }
    // }

    function my_autoloader($class) {
        $class = strtolower($class);
        $path = MODELS . "/{$class}.php";

        if(is_file($path) && !class_exists($class)) {
            include $path;
        } else {
            die("The file named {$class}.php was not found");
        }
    }
    
    spl_autoload_register('my_autoloader');

    function redirect($location) {
        header("Location: {$location}");
    }

    function jsonHeaders() {
        header("Content-Type: application/json");
    }

    function goodHttpResponse() {
        http_response_code(200);
    }

    function badHttpRequest() {
        http_response_code(400);
    }
    

    // CHECK FORM ELEMENTS
    
    function checkInput($el) {
        global $errors;

        if(!preg_match($el['regex'], $el['value'])) {
            $errors[] = "Pogresan format: primer formata: " + $el['example'];
        }
    }

    function checkNumber($el) {
        global $errors;

        if($el['type'] == "ddl" || $el['type'] == "number") {
            if(!isset($el['value']) || $el['value'] < 1) {
                $errors[] = $el['error'];
            }
        } else {
            if(!isset($el['value']) || $el['value'] < 10 || $el['value'] > 500) {
                $errors[] = $el['error'];
            }
        }

    }

    function checkInputPass($el) {
        if($el['value'] == "" || strlen($el['value']) < $el['min']) {
            $errors[] = $el['Lozinka mora imati minimum 8 karaktera'];
        }
    }

    function checkInputDate($el) {
        $selectedTmp = strtotime($el['value']);
        $nowTmp = time();

        if($selectedTmp > $nowTmp) {
            $errors[] = $el['example'];
        }
    }

    function checkTextarea($el) {
        global $errors;

        if(!isset($el['value']) || strlen($el['value']) < 10) {
            $greske[] = $el['error'];
        }
    }

?>