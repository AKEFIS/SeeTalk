<div class="utilisateurs-container">
    <table class="utilisateurs" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <?php
                foreach ($utilisateurs[0] as $key => $col) {
                    echo '<th>' . $key . '</th>';
                }
                ?>
                <th>modifier</th>
                <th>supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $utilisateur) {
                echo '<tr>';
                foreach ($utilisateur as $col) {
                    echo '<td>' . $col . '</td>';
                }
            ?>
                <td><img src="img/pencil.svg" alt="" class="supprimer_user" id_user="<?= $utilisateur['ID_USER'] ?>"></td>
                <td>
                    <form action="supprimer_utilisateur" method="post" name="delete_user">
                        <input type="hidden" name="id_user" value="<?= $utilisateur['ID_USER'] ?>">
                        <input type="image" src="img/escape.svg" alt="submit">
                    </form>
                </td>
            <?php
                echo '<tr>';
            } ?>

        </tbody>
    </table>
</div>
<img src="img/plus.svg" alt="" class="ajouter_user" style="max-width: 100px" id="<?= $utilisateur['ID_USER'] ?>">