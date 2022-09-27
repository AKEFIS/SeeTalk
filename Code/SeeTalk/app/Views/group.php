<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/group.css">
    <title>Document</title>
</head>

<body>
    
    <div id="container">
        <div class="reunion">
            <h2 class="title-font">Créez votre réunion</h2>
            <form action="#" method="POST">
                <div class="information">
                    <div class="input_group">
                        <label for="group_name" class="title-font">NOM DU GROUPE : </label>
                        <input type="text" name="group_name">
                    </div>
                    <div class="input_group" style="margin-top: 1rem;">
                        <label for="group_password" class="title-font">MOT DE PASSE : </label>
                        <input type="password" name="group_password">
                    </div>
                    <div class="people-list">
                        <h3 class="title-font">LISTE DES PERSONNES : </h3>
                        <p>Nicolas Daunac, Guillaume Vern, Lucas Sanhes, Maxime Curtil</p>
                    </div>
                </div>
                <div class="ajouter">
                    <div class="add_member">
                        <h3>AJOUTEZ DES MEMBRES</h3>
                        <p>Nicolas Daunac</p>
                        <p>Lucas Sanhes</p>
                        <p>Guillaume Vern</p>
                        <p>Maxime Curtil</p>
                    </div>
                    <input type="submit" class="submit" value="Créez le groupe">
                </div>
            </form>
            <a href="/index.html">← Retour</a>
        </div>
    </div>
    <script src="./javascript/index.js" type="text/javascript"></script>

</body>

</html>