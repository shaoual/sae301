<?php
// Assurez-vous que WordPress charge l'en-tête et le pied de page
get_header(); 
?>

<main>
    <!-- Section Héro -->
    <section class="hero" style="background-image: url('wp-content/uploads/2024/11/img1-1.png');">
        <h1>AUDALEAGUE</h1>
        <p>Ascentia est une plateforme dédiée aux amateurs d'e-sports, offrant un espace pour s'affronter, progresser et exceller dans l'univers compétitif du jeu vidéo.</p>
        <a href="#tournaments" class="cta-button">Rejoindre un tournoi</a>
    </section>

    <!-- Section À Propos -->
    <section class="about">
        <h2>À PROPOS DE NOUS</h2>
        <p>Bienvenue dans l'univers d'Audaleague, le carrefour où les passionnés de League of Legends se hissent au sommet de la compétition.</p>
        <img src="wp-content/uploads/2024/11/img2.png" alt="À propos d'Audaleague" class="about-image" />
    </section>

    <!-- Section Vivez l'expérience -->
    <section class="experience">
        <h2>VIVEZ L'EXPÉRIENCE AUDALEAGUE</h2>
        <div class="features">
            <div class="feature">
                <h3>Graphiques Dynamiques</h3>
                <img src="wp-content/uploads/2024/11/Group.png" alt="Graphiques Dynamiques" class="feature-image" />
                <p>Visualisez vos performances grâce à des graphiques et des analyses détaillées.</p>
            </div>
            <div class="feature">
                <h3>Récompenses Exclusives</h3>
                <img src="wp-content/uploads/2024/11/game-2.png" alt="Récompenses Exclusives" class="feature-image" />
                <p>Participez à des tournois pour gagner des récompenses réservées à notre communauté.</p>
            </div>
            <div class="feature">
                <h3>Accessibilité Totale</h3>
                <img src="wp-content/uploads/2024/11/microchip-2.png" alt="Accessibilité Totale" class="feature-image" />
                <p>Accédez à notre plateforme depuis n'importe quel appareil, où que vous soyez.</p>
            </div>
        </div>
    </section>

    <!-- Section Stream -->
    <section class="stream">
        <h2>STREAM</h2>
        <p>Accédez à notre plateforme depuis n'importe quel appareil et plongez au cœur de l'action où que vous soyez.</p>
        <a href="#join" class="cta-button">Nous rejoindre</a>
    </section>

    <!-- Section Tournois -->
<section id="tournaments" class="tournaments">
    <h2>NOS TOURNOIS LEAGUE OF LEGENDS</h2>
    <div class="tournament-carousel">
        <div class="tournament-card">
            <img src="wp-content/uploads/2024/11/img3.png" alt="THE WINNER TOURNAMENT" class="tournament-image" />
            <h3>THE WINNER TOURNAMENT</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 5/5</p>
        </div>
        <div class="tournament-card">
            <img src="wp-content/uploads/2024/11/img1-1.png" alt="TOURNOI 2" class="tournament-image" />
            <h3>TOURNOI 2</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 4/5</p>
        </div>
        <div class="tournament-card">
            <img src="wp-content/uploads/2024/11/img9.png" alt="TOURNOI 3" class="tournament-image" />
            <h3>TOURNOI 3</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 3/5</p>
        </div>
        <div class="tournament-card">
            <img src="wp-content/uploads/2024/11/img8.png" alt="TOURNOI 4" class="tournament-image" />
            <h3>TOURNOI 4</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 5/5</p>
        </div>
        <div class="tournament-card">
            <img src="wp-content/uploads/2024/11/tournament-image5.png" alt="TOURNOI 5" class="tournament-image" />
            <h3>TOURNOI 5</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 5/5</p>
        </div>
    </div>
</section>

    <!-- Section Contact -->
    <section class="contact">
        <h2>CONTACTEZ NOUS</h2>
        <form action="traitement_formulaire.php" method="post">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit" class="cta-button">Enregistrer</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>
