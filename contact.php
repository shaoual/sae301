<?php
/*
Template Name: contacts
*/

get_header(); 
?>

<div class="contact-container">

    
    <div class="contact-form-section">
        <h1>Contact</h1>
        <p>Si vous souhaitez nous contacter, veuillez remplir les informations suivantes :</p>
        <form class="contact-form" action="#" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit" class="submit-button">Enregistrer</button>
        </form>
    </div>

</div>

<?php get_footer(); ?>
