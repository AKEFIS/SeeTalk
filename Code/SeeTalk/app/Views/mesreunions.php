<div class="container-grid">
    <div class="list-reunions">
        <div class="inner">
            <h2>Mes Réunions</h2>
            <div class="scroll">
                <div>
                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <div class="reunion">
                            <div class="row">
                                <h3>Titre</h3>
                                <div class="horaire">HORAIRE</div>
                            </div>
                            <div class="row">
                                <div class="objet">objet de la réunion</div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="creer-reunion">Créer une réunion</div>
    </div>
</div>