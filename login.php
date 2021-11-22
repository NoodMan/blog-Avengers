<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Le menu -->
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="style/stylelogin.css?php echo time(); ?>">

</head>

<body>

    <div class="flex-container">
        <div>
            <main id="main">
                <form action="../../controller/AccountController.php" method="POST" id="form-control">
                    <div>
                        <h1>S'identifier</h1>
                        <hr width="15%" color="red">

                        <p>Merci de vous s'identifier</p>

                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                    <div>
                        <label for="password">Mot de passe : </label>
                        <input type="password" name="password" id="password" required />
                    </div>


                    <div>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label1 for="scales">Se souvenir de moi</label1>
                    </div>
                    <p>Mot de passe oublier</p>
                    <!--modifier pour renvoi vers page mdp oublier lien clic-->
                    <div>
                        <small>
                            <?php if (isset($_GET['error'])) {
                                echo $_GET['error'];
                            } ?>
                        </small>
                    </div>

                    <br>
                    <button class="button0" input type="submit" value="Se connecter"><span>Se connecter </span></button>








                </form>
            </main>
</body>
</div>
</div>

<footer id="footer">
    <div id="footer-content">
        <span><small>&#169; by Adline</small></span>
    </div>
</footer>


</html>