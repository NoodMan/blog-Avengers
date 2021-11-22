<?php
require_once("../config/mysql.php");
require_once("../config/config.php");

if (!isset($_SERVER["HTTP_REFERER"])) {
    die("access restricted");
}

if (!$_SERVER["HTTP_REFERER"] === "AccountController.php") {
    die("access restricted");
}

$error = [
    "message" => "",
    "exist" => false
];

function checkLogin($email, $password)
{
    global $error;
    $email =  htmlspecialchars(strip_tags($email));
    $password =  htmlspecialchars(strip_tags($password));

    if (empty($email) || empty($password)) {
        $error["message"] .= "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exist"] = true;

        return $error;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["message"] .= "Saisissez un adresse email valide";
        $error["exist"] = true;

        return $error;
    }

    getPasswordUser($email, $password);

    return $error;
}

function getPasswordUser($email, $password)
{

    global $connexion;
    global $error;

    $query = $connexion->prepare("SELECT `password`FROM `user`WHERE email=:email;");
    $response = $query->execute(["email" => $email]);
    if (!$response) {
        $error["message"] .= "Une erreur s'est produit durant la rechercher du mot de passe";
        $error["exist"] = true;
        return $error;
    }

    $aDatas = $query->fetchAll();

    verifyPassword($aDatas, $password);
    return $error;
}

function verifyPassword($aDatas, $password)
{

    global $error;
    $aDatas = $aDatas[0];

    if (!isset($aDatas['password'])) {

        $error["message"] .= "Aucun utilisateur n'a été trouvé";
        $error["exist"] = true;

        return $error;
    }
    /*var_dump(); pour verifier le comptenu du tableau
die();*/
    $passwordVerified = password_verify($password, $aDatas['password']);

    if (!$passwordVerified) {
        $error["message"] .= "Mot de passe incorrect.";
        $error["exite"] = true;

        return $error;
    }
}
