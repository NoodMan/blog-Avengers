<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Le menu -->
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="style/article.css">
</head>


<hr>

<br>

<body>

    <main id="main">
        <form action="../../controller/articleController.php?type=add" method="POST" id="form-control">

            <div>

            <input type="hidden" name="user_id" id="user_id" value="<?php if(isset($_SESSION['user']['id'])) { echo $_SESSION['user']['id']; } ?>">
            </div>
            <div>

                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" required />
            </div>
            <div>
                <label for="content">exprimez vous </label>
                <textarea name="content" id="content" required /></textarea>
            </div>

            <div>
                <select name="categories" id="categories">
                    <option value="1">jhlkfjgl</option>
                    <option value="2">jhlkfjgl</option>
                    <option value="3">jhlkfjgl</option>
                </select>

            </div>

            <div id="login_button">
                <input type="submit" value="Se connecter" />
            </div>
            <span>
                <small id="error">
                    <?php if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    } ?>
                </small>
            </span>
        </form>
    </main>
</body>



<br>
 <br>





<div id="searchbar">

    <h1>Si vous chercher quelque chose...?</h1>
    <form action="" class="formulaire">
        <input class="champ" type="text" value="Search...)" />
        <input class="bouton" type="button" value=" " />

    </form>
</div>


<div id="searchbar">

    <h1>Si vous chercher quelque chose...?</h1>
    <form action="" class="formulaire">
        <input class="champ" type="text" value="Search...)" />
        <input class="bouton" type="button" value=" " />

    </form>
</div>

<div id="searchbar">

    <h1>Si vous chercher quelque chose...?</h1>
    <form action="" class="formulaire">
        <input class="champ" type="text" value="Search...)" />
        <input class="bouton" type="button" value=" " />

    </form>
</div>
</body>

<footer id="footer">
    <div id="footer-content">
        <span><small>&#169; by Adline</small></span>
    </div>
</footer>


</html>