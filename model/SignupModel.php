<?php
require_once("../Config/mysql.php");


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

function checkSignUp($pseudo, $email, $password, $user_type, $accepted)
{
    global $error;
    $pseudo = htmlspecialchars(strip_tags($_GET['pseudo']));
    $email = htmlspecialchars(strip_tags($_GET['email']));
    $password = htmlspecialchars(strip_tags($_GET['password']));
    $user_type = htmlspecialchars(strip_tags($_GET['user_type']));
    $accepted = htmlspecialchars(strip_tags($_GET['accepted']));
    $accepted =  $accepted == "on" ? 1 : 0;

    if (
        empty($pseudo) || empty($email) || empty($password) || empty($comfirm_password) || empty($user_type)
    ) {
        $error["message"] .= "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exit"] = true;

        return $error;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["message"] .= "Saississez une adresse email valide";
        $error["exit"] = true;

        return $error;
    }
    $password = passwordHash($password);

    addUser($pseudo, $email, $password, $user_type, $accepted);

    return $error;
}

function addUser($pseudo, $email, $password, $user_type, $accepted)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("INSERT INTO `user` (`pseudo`, `email`, `password`, `accepted`) VALUES(:pseudo, :email, :pwd, :accepted);");
    $response = $query->execute(["pseudo" => $pseudo, "email" => $email, "pwd" => $passeword, "accepted" => $accepted]);
    if (!$response) {
        $error["message"] .= "Une erreur s'est produite durant l'inscription";
        $error["exist"] = true;
    }
}
function passwordHash($password)
{
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    return $hash_password;
}
