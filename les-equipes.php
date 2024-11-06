<?php
/*
Template Name: lesEquipes
*/

// Assurez-vous que WordPress charge l'en-tête et le pied de page
get_header(); 
?>

<main>
    <!-- Section Équipes en Vedette -->
    <section class="featured-teams">
        <h2>ÉQUIPES EN VEDETTE</h2>
        <h3>Équipe du Mois : Champions d'Audaleague</h3>
        <div class="team-carousel">
            <!-- Carte 1 -->
            <div class="team-card">
                <img src="http://sae301selma.local/wp-content/uploads/2024/11/img8.png" alt="The Winners" class="team-image" />
                <h4>The Winners</h4>
                <p>Mars 01 - Mars 27, 2024</p>
                <p>5/5 Participants</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
            <!-- Carte 2 -->
            <div class="team-card">
                <img src="http://sae301selma.local/wp-content/uploads/2024/11/img9.png" alt="Team B" class="team-image" />
                <h4>Team B</h4>
                <p>Mars 01 - Mars 27, 2024</p>
                <p>4/5 Participants</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
            <!-- Carte 3 -->
            <div class="team-card">
                <img src="http://sae301selma.local/wp-content/uploads/2024/11/imgcard.png" alt="Team C" class="team-image" />
                <h4>Team C</h4>
                <p>Mars 01 - Mars 27, 2024</p>
                <p>3/5 Participants</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
            <!-- Carte 4 -->
            <div class="team-card">
                <img src="http://sae301selma.local/wp-content/uploads/2024/11/img1-1.png" alt="Team D" class="team-image" />
                <h4>Team D</h4>
                <p>Mars 01 - Mars 27, 2024</p>
                <p>2/5 Participants</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
            <!-- Carte 5 -->
            <div class="team-card">
                <img src="http://sae301selma.local/wp-content/uploads/2024/11/img2.png" alt="Team E" class="team-image" />
                <h4>Team E</h4>
                <p>Mars 01 - Mars 27, 2024</p>
                <p>1/5 Participants</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
        </div>
        <div class="pagination">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>Suivant</button>
        </div>
    </section>

    <!-- Section Calendrier Complet des Équipes -->
    <section class="full-calendar">
        <h2>Calendrier Complet des Équipes</h2>
        <p>Consultez notre <a href="#">calendrier complet</a> des équipes pour découvrir toutes les formations inscrites dans les tournois à venir. Vous pouvez filtrer par nom d’équipe, classement et statut des joueurs pour trouver celles qui correspondent à votre niveau et à vos préférences.</p>
    </section>

    <!-- Section Rejoindre une Équipe -->
    <section class="join-team">
        <h2>Rejoindre une Équipe</h2>
        <h3>Choisissez une Équipe</h3>
        <p>Parcourez notre liste d’équipes et choisissez celle qui vous intéresse le plus.</p>
        <h3>Vérifiez les Règles de l'Équipe</h3>
        <p>Parcourez notre liste d’équipes et choisissez celle qui vous intéresse le plus.</p>
        <h3>Rejoignez l'Équipe</h3>
        <p>Connectez-vous à votre compte Audaleague et envoyez une demande pour rejoindre l’équipe.</p>
    </section>

    <!-- Section FAQ des Équipes -->
    <section class="teams-faq">
        <h2>FAQ des Équipes</h2>
        <p>Vous avez des questions ? Consultez notre <a href="#">FAQ des équipes</a> pour trouver des réponses aux questions fréquentes sur la création d’équipes, le recrutement, les rôles des membres, et bien plus encore.</p>
    </section>
</main>

<?php get_footer(); ?>
