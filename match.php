<?php
/*
Template Name: Matchs
*/

get_header(); 
$upload_dir = wp_upload_dir(); // Récupère le chemin vers le dossier d'upload
?>

<main>
    <!-- Section Hero -->
    <section class="hero" style="background-image: url('<?php echo esc_url($upload_dir['baseurl']); ?>/2024/11/ella-don-fK5Oomnc-Wk-unsplash-2.png');">
        <h1>LES TOURNOIS</h1>
    </section>

    <!-- Section Match -->
    <section class="match-section">
        <div class="match-info">
            <div class="match-details">
                <h2>Match entre Équipe A et Équipe B</h2>
                <p>Date : 01 Mars 2024</p>
                <p>Heure : 18h00</p>
                <p>Stade : Stade de la Victoire</p>
                <p>Statut : En cours</p>
            </div>
            <div class="match-actions">
                <a href="./Lol.php" class="cta-button">Suivre le Match</a>
                <button class="cta-button">Voir les Statistiques</button>
            </div>
        </div>
        
        <div class="team-carousel">
            <div class="team-card-unique-1">
                <img src="<?php echo esc_url($upload_dir['baseurl']); ?>/2024/11/match.png" alt="Équipe A" class="team-image-unique-1" />
                <h3 class="team-title-unique-1">Équipe A</h3>
                <p class="team-participants-unique-1">5 joueurs</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
            
            <div class="vs-text">VS</div> <!-- Texte "VS" entre les cartes -->

            <div class="team-card-unique-2">
                <img src="<?php echo esc_url($upload_dir['baseurl']); ?>/2024/11/img9.png" alt="Équipe B" class="team-image-unique-2" />
                <h3 class="team-title-unique-2">Équipe B</h3>
                <p class="team-participants-unique-2">5 joueurs</p>
                <a href="#" class="cta-button">Voir plus</a>
            </div>
        </div>

        <h2>Équipes en Compétition</h2> <!-- Titre sous les cartes -->
    </section>
</main>

<?php get_footer(); ?>
