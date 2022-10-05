<div class="container-grid">
    <form action="" method="post" id="connexion">
        <h2 class="title">Inscription</h2>
        <div class="col-form">
            <div class="col">
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
                
            </div>
            <div class="col">
                <div class="label-input">
                    <label for="nom">Nom:</label>
                    <input type="text" name="pseudo">
                </div>
                <div class="label-input">
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom">
                </div>
                <div class="label-input">
                    <label for="societe">Société:</label>
                    <input type="text" name="societe">
                </div>
                <div class="label-input">
                    <label for="telephone">Téléphone:</label>
                    <input type="text" name="telephone">
                </div>
                <div class="label-input" id="select">
                    <label for="grade">Grade:</label>
                    <select name="grade">
                        <option value="">--choisir une option--</option>
                        <option value="0">Visiteur</option>
                        <option value="1">Utilisateur</option>
                        <option value="10">Gestionnaire</option>
                        <option value="100">Administrateur</option>
                    </select>
                </div>
            </div>
        </div>
        <input class="submit-button" type="submit" value="Connexion">
    </form>
</div>