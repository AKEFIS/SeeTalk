
<div class="container">
    <?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
    <div class="videocall">
        <div class="webRTC">
            <img src="img/cc.png"/>
        </div>
        <div class="cadre_groupe">
            <div class="titre_message">
                <h4>Vous êtes <?php echo $_SESSION['name']; ?></h4>
            </div>
            <div class="chatbox">
                <?php //Afficher le contenue de chat log
    if(file_exists("log.html") && filesize("log.html") > 0){
         
        $contents = file_get_contents("log.html");
        echo $contents;
    }
    ?>

               <!-- <div class="chat-line_message">
                    <p class="user_pseudo">Utilisateur.pseudo</p>
                    <p class="user_message">14:05: Contenu de table Message</p>
                </div>
                <div class="chat-line_message">
                    <p class="user_pseudo">Utilisateur.pseudo</p>
                    <p class="user_message">14:05: Contenu de table Message</p>
                </div>
                <div class="chat-line_message">
                    <p class="user_pseudo">Utilisateur.pseudo</p>
                    <p class="user_message">14:05: Contenu de table Message</p>
                </div>
                <div class="chat-line_message">
                    <p class="user_pseudo">Utilisateur.pseudo</p>
                    <p class="user_message">14:05: Contenu de table Message</p>
                </div> -->

            </div>
            <div class="message">
                <form name="message" action="">
                    <input class="ecrire_message" type="text" name="ecrire_message" placeholder="Envoyer un message">
                    <input class="soumettre_message" type="submit"  name="soumettre_message" value="Send" />
                </form>
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                // jQuery Document
                $(document).ready(function () {});
            </script>
            <?php
}
?>
        </div>
    </div>

</div>
</div>
<?php

 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
 
function loginForm(){
    echo'
    <div id="loginform">
      <p>Please enter your name to continue!</p>
      <form action="index.php" method="post">
        <label for="name">Name &mdash;</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
      </form>
    </div>
    ';
}
?>