<script defer src="js/gestion_utilisateur.js"></script>
<div class="utilisateurs-container">
    <table class="utilisateurs" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <?php 
                foreach($utilisateurs[0] as $key => $col){
                    echo '<th>' . $key . '</th>';
                }
                ?>
                <th>modifier</th>
                <th>ajouter</th>
                <th>supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($utilisateurs as $utilisateur) { 
            echo '<tr>';
            foreach($utilisateur as $col){
                echo '<td>' . $col . '</td>';
            }
            ?>
            <td><img src="img/pencil.svg" alt="" class="modifier" id="<?= $utilisateur['ID_USER']?>"></td>
            <td><img src="img/plus.svg" alt="" class="ajouter" id="<?= $utilisateur['ID_USER']?>"></td>
            <td><img src="img/escape.svg" alt="" class="supprimer" id="<?= $utilisateur['ID_USER']?>"></td>
            <?php
            echo '<tr>';
            
            } ?>
            
        </tbody>
    </table>
</div>