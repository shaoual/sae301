<?php
/*
Template Name: leaguesoflegends
*/

get_header();
$upload_dir = wp_upload_dir(); // Récupère le chemin vers le dossier d'upload
?>
  <!-- Section Hero -->
    <section class="hero" style="background-image: url('<?php echo esc_url($upload_dir['baseurl']); ?>/2024/11/hero-background.png');">
        <h1>MATCH LoL</h1>
    </section>

    
    <div class="game-content">
        <div class="player-tags">
            <div class="player user213">user213</div>
            <div class="player tt13">tt13</div>
            <div class="player riri">riri</div>
            <div class="player myk212">myk212</div>
            <div class="player user44">user44</div>
        </div>
        <img src="<?php echo esc_url($upload_dir['baseurl']); ?>/2024/11/match.png"  alt="Game Screenshot" class="game-screenshot" />
      
    </div>

<?php get_footer(); ?>
