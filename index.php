<?php
session_start();


// MENTIONS LEGALES
if (isset($_GET['page']) && 'mentions-legales' === $_GET['page']) {
    ob_start();
    require_once('vues/page-mentions-legales.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// OFFRES & AVANTAGES
/* elseif (isset($_GET['page']) && 'offres-avantages' === $_GET['page']) {
    ob_start();
    require_once('vues/page-offres-avantages.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}
 */

// TEMOIGNAGES
/* elseif (isset($_GET['page']) && 'temoignages' === $_GET['page']) {
    ob_start();
    require_once('vues/page-temoignages.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}
 */

 // CONTACT & HORAIRES
elseif (isset($_GET['page']) && 'contact-horaires' === $_GET['page']) {
    ob_start();
    require_once('vues/page-contact-horaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

/* TECHNOLOGIES */

elseif (isset($_GET['page']) && 'technologies' === $_GET['page']){
    ob_start();
    require_once('vues/page-technologies.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

else {
    ob_start();
    require_once('vues/page-accueil.php');
    
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
    //$contenu = ob_get_clean();
    //require_once('vues/layout.php');
}

