<div class="utilisateurs-container">
    <table class="utilisateurs" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>utilisateur id</th>
                <th>utilisateur nom</th>
                <th>utilisateur prenom</th>
                <th>utilisateur mail</th>
                <th>utilisateur pass</th>
                <th>utilisateur société</th>
                <th id="end"></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <td>1</td>
                    <td>Daunac</td>
                    <td>Nicolas</td>
                    <td>ndaunac@gmail.com</td>
                    <td>blablapooki6</td>
                    <td>Nicolas inc</td>
                    <td class="end">0 0 0</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>