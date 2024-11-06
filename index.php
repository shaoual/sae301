<?php
// Assurez-vous que WordPress charge l'en-tête et le pied de page
get_header(); 
?>

<main>
    <!-- Section Héro -->
    <section class="hero">
        <h1>AUDALEAGUE</h1>
        <p>Ascentia est une plateforme dédiée aux amateurs d'e-sports, offrant un espace pour s'affronter, progresser et exceller dans l'univers compétitif du jeu vidéo.</p>
        <a href="#tournaments" class="cta-button">Rejoindre un tournoi</a>
    </section>

    <!-- Section À Propos -->
    <section class="about">
        <h2>À PROPOS DE NOUS</h2>
        <p>Bienvenue dans l'univers d'Audaleague, le carrefour où les passionnés de League of Legends se hissent au sommet de la compétition.</p>
    </section>

    <!-- Section Vivez l'expérience -->
    <section class="experience">
        <h2>VIVEZ L'EXPÉRIENCE AUDALEAGUE</h2>
        <div class="features">
            <div class="feature">
                <h3>Graphiques Dynamiques</h3>
                <p>Visualisez vos performances grâce à des graphiques et des analyses détaillées.</p>
            </div>
            <div class="feature">
                <h3>Récompenses Exclusives</h3>
                <p>Participez à des tournois pour gagner des récompenses réservées à notre communauté.</p>
            </div>
            <div class="feature">
                <h3>Accessibilité Totale</h3>
                <p>Accédez à notre plateforme depuis n'importe quel appareil, où que vous soyez.</p>
            </div>
        </div>
    </section>

    <!-- Section Tournois -->
    <section id="tournaments" class="tournaments">
        <h2>NOS TOURNOIS LEAGUE OF LEGENDS</h2>
        <div class="tournament">
            <h3>THE WINNER TOURNAMENT</h3>
            <p>Participez à des tournois passionnants où vous pourrez défier les meilleurs joueurs.</p>
            <p>Nombre de participants : 5/5</p>
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
