<?php include('header.php'); ?>
<div class="container-grid">
    <form action="" method="post" id="connexion">
        <h2 class="title">Inscription</h2>
        <div class="label-input">
            <label for="pseudo">Pseudo:</label>
            <input type="text" name="pseudo">
        </div>
        <div class="label-input">
            <label for="email">E-Mail:</label>
            <input type="text" name="email">
        </div>
        <div class="label-input">
            <label for="mdp">Mot de passe:</label>
            <input type="text" name="mdp">
        </div>
        <div class="label-input">
            <label for="verif-mdp">Vérification Mot de passe:</label>
            <input type="text" name="verif-mdp">
        </div>
        <div class="submit-button" type="submit">Connexion</div>
    </form>
</div>

<?php include('footer.php'); ?>