<!DOCTYPE html>
<html lang="en">
<?php $session = session(); ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeeTalk</title>
    <link rel="stylesheet" href="http://seetalk.lan/css/style.css">
    <script defer src="http://seetalk.lan/js/header.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="mobile">
                <a href="/" class="logo"><img src="http://seetalk.lan/img/txcom.png" alt=""></a>
                <img class="menu-button" src="http://seetalk.lan/img/menu-icon-60.svg">
            </div>
            <div class="menu">
                <a href="/" class="nav-link">Accueil</a>
                <?php
                if ($session->get('GRADE') == 100) {
                ?>
                    <a href="gestion_utilisateurs" class="nav-link">Gestion utilisateurs</a>
                <?php } ?>
                <a href="/add_contact">Ajouter un contact</a>
                <a href="/mesreunions">Réunions</a>
                <a href="/fiche_user">Mon compte</a>
                <a href="/group">Groupe</a>
                <a href="/appel">Appel</a>
                <a href="/login" class="nav-link">Connexion</a>
                <a href="/logout" class="nav-link">Déconnexion</a>
            </div>
        </header>