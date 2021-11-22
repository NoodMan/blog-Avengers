<!DOCTYPE html>
<html lang="fr">

<header>
    <!-- Le menu -->
    <?php include('header.php'); ?>


</header>


<!--page a changer en page inscription bien valider "/successfully.html"-->

<div class="container">


    <h1>Message bien reçu !</h1>

    <div class="card">

        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> :
                <!--<?php echo ($email); ?>-->
            </p>
            <p class="card-text"><b>Message</b> :
                <!--<?php echo strip_tags($message); ?>-->
            </p>
        </div>
    </div>
</div>

<br>

<footer id="footer">
    <div id="footer-content">
        <span><small>&#169; by Adline</small></span>
    </div>
</footer>


</html>