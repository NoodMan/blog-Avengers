<!DOCTYPE html>
<html lang="fr">

<header>
    <!-- Le menu -->
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="style/styleinscription.css">

</header>
<hr>
<br>
<br>
<!--./controller/AccountController.php-->
<div class="flex-container">
<div> 
    <form action="./controller/AccountController.php" method="POST" id="form-contol">
        <p>Merci de remplir les champs suivants : </p>
        <div>
            <label id="w" for="name">Nom :</label>
            <input type="text" id="name" name="user_name" maxlenght="2">
        </div>
        <br>
        <div>
            <label id="w" for="first name">Prénom :</label>
            <input type="text" id="first name" name="user_first name" placeholder="Ex : Zozor" maxlength="10" />
        </div>
        <br>
        <div>
            <label id="w" for="Pseudo">Pseudo :</label>
            <input type="text" id="pseudo" pseudo="user_pseudo" pattern="[A-z-0-9]+">
        </div>
        <br>
        <div>
            <label id="w" for="mail">E-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <br>
        <div>
            <label id="w" for="msg">Votre message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>



<label id="w" for="Rôle">Votre catégorie : </label>
<select name="" id="">
    <optgroup label="Europe">
        <option value="france">France</option>
        <option value="espagne">Espagne</option>
        <option value="italie">Italie</option>
        <option value="royaume-uni">Royaume-Uni</option>
    </optgroup>
    <optgroup label="Amérique">
        <option value="canada">Canada</option>
        <option value="etats-unis">Etats-Unis</option>
    </optgroup>
    <optgroup label="Asie">
        <option value="chine">Chine</option>
        <option value="japon">Japon</option>
    </optgroup>
</select>

<br>

<div class="button">
    <button> <span style="cursor:pointer">Envoyer le message</span></button><br>
</div>

</form>

</div>

</div>




<br>
<footer id="footer">
    <div id="footer-content">
        <span><small>&#169; by Adline</small></span>
    </div>
</footer>


</html>