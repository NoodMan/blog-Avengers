<?php
require_once("../Config/mysql.php");
require_once("../Config/config.php");

function checkAddParams($user_id, $title, $content, $categories)
{
    global $error;
    $user_id = htmlspecialchars(strip_tags($user_id));
    $title = htmlspecialchars(strip_tags($title));
    $content = htmlspecialchars(strip_tags($content));
    $categories = htmlspecialchars(strip_tags($categories));

    if (empty($user_id) || empty($title) || empty($content) || empty($categories)) {
        $error["message"] .= "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exist"] = true;
    }
}
