<div id="contact-horaires-div">

<?php
    $_TEL = "0663627045";
    $_TEL_SPACES = "06 63 62 70 45";
    $_MAIL = "contact@webfm.fr";
?>


    <h1>CONTACT & HORAIRES</h1>

    <div id="contact-form">
        
    </div>

    <div class="contact-boxes" id="contact-coordonnees">
        <h2>COORDONNEES</h2>
        <p class="hide-on-little-screen">
            <!-- <b>T&eacute;l&eacute;phone fixe : </b><a href="tel:0412345678" alt="telephoner fixe">&nbsp;04 12 34 56 78</a><br> -->
            <b>T&eacute;l&eacute;phone portable : </b><a href="tel:<?= $_TEL ?>" alt="telephoner mobile">&nbsp;<?= $_TEL_SPACES ?></a><br>
            <b>Mail : </b><a href="mailto:<?= $_MAIL ?>">&nbsp;<?= $_MAIL ?></a>
        </p>
        <p class="display-on-little-screen">
            <!-- <b>T&eacute;l&eacute;phone fixe</b><br><a href="tel:0412345678" alt="telephoner fixe">&nbsp;04 12 34 56 78</a><br><br> -->
            <b>T&eacute;l&eacute;phone portable</b><br><a href="tel:<?= $_TEL ?>" alt="telephoner mobile">&nbsp;<?= $_TEL_SPACES ?></a><br><br>
            <b>Mail</b><br><a href="mailto:<?= $_MAIL ?>">&nbsp;<?= $_MAIL ?></a>
        </p>
        
    </div>

    <div class="contact-boxes" id="contact-reseaux-sociaux">
        <h2>RESEAUX SOCIAUX...</h2>
        LinkedIn<br>
        <a href="https://www.linkedin.com/in/fabien-macip/" target="_blank" alt="LinkedIn Fabien Macip">
            <img src="img/linkedin-widget.jpg" id="linkedin-widget">
        </a><br><br>
        GitHub<br>
        <a href="https://github.com/fabienmacip" target="_blank" alt="GitHub Fabien Macip">
            <img src="img/github-widget.jpg" id="github-widget">
        </a>
        
    </div>
    
    <div class="contact-boxes" id="contact-horaires">
        <h2>HORAIRES</h2>
        <p>
            Lundi &rarr; Vendredi<br>
            08h00 &rarr; 18h00
        </p>
    </div>
    
    <div id="contact-map" class="contact-boxes">
        <h2>NOUS TROUVER</h2>
        <p>
            <b>Adresse</b><br>
            9 bis, rue Ermengaud<br>
            B&eacute;ziers (34 500)
        </p>
        <iframe 
        id="googlemap" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.417379048474!2d3.2112841765423785!3d43.34737937215607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b10e8959bb47e3%3A0xa84bce23c9be2186!2s9%20Rue%20Ermengaud%2C%2034500%20B%C3%A9ziers!5e0!3m2!1sfr!2sfr!4v1712567243667!5m2!1sfr!2sfr" 
        style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade" 
                data-no-lazy="1" 
                data-service="google-maps" 
                data-placeholder-image="img/google-map.jpg">
    	    </iframe>

    </div>

</div>
