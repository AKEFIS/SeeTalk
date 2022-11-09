<div class="grid-accueil">
    <div class="row">
        <div class="text">
            <h2>Une envie</h2>
            Notre service de visioconférence en ligne, vous aide à mieux gérer votre entreprise.
        </div>
        <div class="img"><img src="http://seetalk.lan/img/accueil2.jpg" alt="" style="width:100%; height:100%"></div>
    </div>
    <div class="row reverse">
        <div class="text">
            <h2>Une envie</h2>
            Notre service de visioconférence en ligne, vous aide à mieux gérer votre entreprise.
            <?php
            if (!empty(session()->get())) {
                var_dump(session()->get());
            }
            ?>
        </div>
        <div class="img"><img src="http://seetalk.lan/img/accueil1.webp" alt="" style="width:100%; height:100%"></div>
    </div>
</div>