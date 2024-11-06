<?php
/*
Template Name: politiquesconfid
*/

get_header();
?>

<div class="privacy-policy-container">
    <h1>Politique de confidentialité</h1>
    <p>Bienvenue sur notre page dédiée à la politique de confidentialité d’Audaleague. Nous accordons une grande importance à la protection de vos données personnelles et à votre vie privée. Cette politique a pour objectif de vous informer sur la manière dont nous collectons, utilisons, partageons et protégeons vos informations personnelles lorsque vous utilisez notre site et nos services.</p>

    <h2>Collecte des informations</h2>
    <ul>
        <li><strong>Informations fournies volontairement :</strong> Cela inclut les données que vous nous fournissez lors de votre inscription, telles que votre nom, adresse e-mail, et autres coordonnées.</li>
        <li><strong>Informations collectées automatiquement :</strong> Nous recueillons automatiquement certaines informations lorsque vous visitez notre site, comme votre adresse IP, le type de navigateur, les pages consultées, ainsi que les heures et dates d'accès.</li>
    </ul>

    <h2>Utilisation des informations</h2>
    <ul>
        <li><strong>Fournir, exploiter et améliorer nos services :</strong> Ces données nous aident à garantir le bon fonctionnement de notre plateforme et à enrichir l'expérience utilisateur.</li>
        <li><strong>Comprendre comment vous utilisez notre site :</strong> Cela nous permet d'optimiser votre expérience utilisateur et de répondre à vos besoins.</li>
        <li><strong>Communiquer avec vous :</strong> Nous réserve votre consentement, nous pourrons vous envoyer des informations sur nos services, des newsletters et des offres promotionnelles.</li>
        <li><strong>Assurer la sécurité de notre site et de nos services :</strong> Nous utilisons vos données pour prévenir les fraudes et les accès non autorisés.</li>
    </ul>

    <h2>Partage des informations</h2>
    <p>Nous ne vendons, n'échangeons, ni ne louons vos informations personnelles à des tiers. Cependant, certaines informations peuvent être partagées dans les cas suivants :</p>
    <ul>
        <li><strong>Fournisseurs de services tiers :</strong> Nous pourrons faire appel à des prestataires pour faciliter nos services, exécuter des tâches pour notre compte, ou analyser nos services.</li>
        <li><strong>Conformité légale :</strong> Nous pourrons divulguer vos informations personnelles si cela est nécessaire pour nous conformer aux lois.</li>
    </ul>

    <h2>Sécurité des informations</h2>
    <p>La sécurité de vos informations personnelles est primordiale pour nous. Nous appliquons des mesures techniques et organisationnelles rigoureuses pour protéger vos données.</p>

    <h2>Vos droits</h2>
    <p>Vous disposez de droits concernant vos données personnelles. Vous pouvez consulter, modifier ou supprimer les informations personnelles que nous détenons sur vous.</p>

    <h2>Modifications de cette politique de confidentialité</h2>
    <p>Notre politique de confidentialité peut être modifiée de temps en temps. Nous vous encourageons à consulter cette politique périodiquement pour rester informé de tout changement.</p>
   <!-- Ajoutez ici le contenu de la politique de confidentialité comme dans l'exemple précédent -->

    <!-- Formulaire de confirmation -->
    <div class="confirmation-form">
        <form id="privacy-form" action="#" method="post">
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" id="confirm-read" required> Je confirme avoir lu la politique de confidentialité.
                </label>
            </div>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" id="confirm-agree" required> J'accepte les conditions d'utilisation.
                </label>
            </div>
            <button type="submit" id="submit-button" disabled>Confirmer</button>
        </form>
    </div>
    <script>
    // Activer le bouton de confirmation seulement quand les cases sont cochées
    document.addEventListener('DOMContentLoaded', function() {
        const confirmRead = document.getElementById('confirm-read');
        const confirmAgree = document.getElementById('confirm-agree');
        const submitButton = document.getElementById('submit-button');

        function checkCheckboxes() {
            submitButton.disabled = !(confirmRead.checked && confirmAgree.checked);
        }

        confirmRead.addEventListener('change', checkCheckboxes);
        confirmAgree.addEventListener('change', checkCheckboxes);
    });
</script>
</div>

<?php get_footer(); ?>
