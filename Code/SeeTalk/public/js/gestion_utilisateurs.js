let modifierLes = document.querySelectorAll('.modifier_user');
let ajouterLes = document.querySelectorAll('.ajouter_user');
let supprimerLes = document.querySelectorAll('.supprimer_user');

console.log(supprimerLes);
console.log(supprimerLes[0].getAttribute('id'));
supprimerLes.forEach((supprimerLe, id) => {
    supprimerLe.addEventListener('click', function () {
        let data = {'id': supprimerLe.getAttribute('id')}
        window.location.href = "<?php echo base_url('supprimer_utilisateur'); ?>";

    })
});