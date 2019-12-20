<?php
$array = array("name" => "", "myemail" => "", "youremail" => "", "message" => "", "mynameError" => "", "myemailError" => "", "youremailError" => "", "messageError" => "", "isSuccess" => false);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["name"] = $_POST["nom"];
    $array["youremail"] = $_POST["mail"];
    $array["myemail"] = $_POST["mymail"];
    $array["message"] = $_POST["message"];
    $array["isSuccess"] = true;
    if(empty($array["name"])) {
        $array["mynameError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["myemail"])) {
        $array["myemailError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["youremail"])) {
        $array["youremailError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["message"])) {
        $array["messageError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if ($array["isSuccess"]) {
        sendMail();
    }    
    header('Content-type: application/json');
    echo json_encode($array);
}