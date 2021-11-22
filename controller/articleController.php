<?php
require_once("../Config/config.php");
require_once("../model/ArticleAddModel.php");

if (!isset($_GET['type'])) {
    header("Location:" . $domaine . "/vues/article/aticle.php?error=un parametre manque à la requete");
    return;
}

$type = $_GET['type'];

if ($_GET['type'] === "add") {
    if(!isset(
        $_POST['title'],
        $_POST['content'],
        $_POST['categories'],
        )) {
            header("Location:" . $domaine . "/vues/article/aticle.php?error=un parametre manque à la requete");
    return;
        }
$isValid = checkAddParams($_POST['user_id'], $_POST['title'], $_POST['content'], $_POST['categories']);

}