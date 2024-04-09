<?php
//ob_start();
?>

<div class="m-0 max-width-100vw">
  <div id="div-image-accueil" class="box">
      &nbsp;D&eacute;veloppeur&nbsp;<span class="span-br"><br></span>Web Fullstack
  </div>

  <div class="row max-width-100percent jcc wrap" id="accueil-text-boxes">
    <div class="accueil-text-boxes box" id="accueil-sport-plaisir">
      <h2>Bienvenue chez WEBFM</h2>
  
      <h3>D&eacute;veloppeur web fullstack</h3>

      <div id="image-accueil-text">
        <div>
          <h4>Services</h4>
          Sites Internet (vitrine)<br>
          Sites Internet (avec outils personnalis&eacute;s)<br>
          Applications<br>
          Blogs<br>
        </div>
        <div>
          <h4>Technologies</h4>
          JavaScript (Vanilla) & Angular<br>
          CSS & Bootstrap<br>
          PHP (Native) & Symfony<br>
          Node.js & Express.js<br>
          MySQL - MongoDB<br>
        </div>
      </div>
    </div>

<?php
  class Projet {
    public $name;
    public $techName; // utilisé pour le css et js
    public $pathName; // utilisé pour le chemin des images
    public $subtitle;
    public $link;
    public $nbImages;
    public $formatImages;
    public $descriptionCommerciale;
    public $descriptionTechnique;


    function __construct() {
      $this->formatImages = "jpg";
    }
  }
  
  $projet1 = new Projet();
  $projet1->name = 'Actiform';
  $projet1->techName = 'Actiform';
  $projet1->pathName = 'actiform';
  $projet1->subtitle = "Site vitrine d'une salle de fitness";
  $projet1->link = 'https://actiform-colombiers.fr';
  $projet1->nbImages = 5;
  $projet1->descriptionCommerciale = [
    "Site vitrine Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; client","Acc&egrave;s &agrave; son programme de fitness","Modification de son mot de passe"],
    ["Espace priv&eacute; administrateur", "Gestion des programmes des clients","Gestion des clients","Modification de son mot de passe"]
  ];
  $projet1->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","Axios","BootStrap"],
    "Architecture &rarr; M.V.C.",
    "SGBD &rarr; MySql"
  ];

  $projet2 = new Projet();
  $projet2->name = 'Appartement-rentable.com';
  $projet2->techName = 'AppartementRentable';
  $projet2->pathName = 'appartement-rentable';
  $projet2->subtitle = "Blog sur l'investissement dans un appartement";
  $projet2->link = 'https://appartement-rentable.com';
  $projet2->nbImages = 2;
  $projet2->descriptionCommerciale = [
    "Blog Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
  ];
  $projet2->descriptionTechnique = [
    "CMS &rarr; WordPress",
    ["Espace priv&eacute; administrateur", "Publication/Gestion des articles","Modification de son mot de passe"]
  ];

  $projet3 = new Projet();
  $projet3->name = 'CustHomeBike34.fr';
  $projet3->techName = 'CustHomeBike';
  $projet3->pathName = 'custhomebike34';
  $projet3->subtitle = "Site vitrine d'un atelier de r&eacute;paration de motos am&eacute;ricaines.";
  $projet3->link = 'https://custhomebike34.fr';
  $projet3->nbImages = 3;
  $projet3->descriptionCommerciale = [
    "Site Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; administrateur", "Gestion des messages exceptionnels de fermeture ou d'annonce d'&eacute;v&eacute;nement","Gestion des clients","Modification de son mot de passe"]
  ];
  $projet3->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C.",
    "SGBD &rarr; MySql"
  ];

  $projet4 = new Projet();
  $projet4->name = 'Fatabien.com';
  $projet4->techName = 'Fatabien';
  $projet4->pathName = 'fatabien';
  $projet4->subtitle = "Site d'auteur-compositeur-interpr&egrave;te";
  $projet4->link = 'https://fatabien.com';
  $projet4->nbImages = 5;
  $projet4->descriptionCommerciale = [
    "Blog Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; administrateur", "Publication/Gestion des concerts","Publication/Gestion des articles du blog","Publication/Gestion des différents &eacute;l&eacute;ments du site (vid&eacute;os, photos, bio...)","Modification de son mot de passe"]
  ];
  $projet4->descriptionTechnique = [
    "CMS &rarr; WordPress",
    "Adaptation du th&egrave;me IRONBAND pour WordPress",
  ];

  $projet5 = new Projet();
  $projet5->name = 'Immo-cash-flow.com';
  $projet5->techName = 'ImmoCashFlow';
  $projet5->pathName = 'immo-cash-flow';
  $projet5->subtitle = "Blog sur l'investissement immobilier";
  $projet5->link = 'https://immo-cash-flow.com/';
  $projet5->nbImages = 4;
  $projet5->descriptionCommerciale = [
    "Blog Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; administrateur","Publication/Gestion des articles du blog","Modification de son mot de passe"],
    ["Outils de l'investisseur", "G&eacute;n&eacute;rateur de quittances de loyers", "Outils de comparaison de bilans pr&eacute;visionnels selon le r&eacute;gime fiscal choisi"],
    "Formulaires de captures d'adresses mails"
  ];
  $projet5->descriptionTechnique = [
    "CMS &rarr; WordPress",
    "Adaptation du th&egrave;me HATHOR pour WordPress",
    "Modules en REACT (bilan pr&eacute;visionnel et quittances)"
  ];

  $projet6 = new Projet();
  $projet6->name = 'La R&eacute;f&eacute;rence';
  $projet6->techName = 'Lmh';
  $projet6->pathName = 'lmh-perpignan';
  $projet6->subtitle = "Site d'une agence des acteurs de l'immobilier.<br>Application de gestion d'un espace de co-working.";
  $projet6->link = 'https://pcf-lcf.fr/lmh-perpignan/';
  $projet6->nbImages = 3;
  $projet6->formatImages = "webp";
  $projet6->descriptionCommerciale = [
    "Site vitrine Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; client","Acc&egrave;s &agrave; son planning pour l'espace de co-working","Modification de son mot de passe"],
    ["Espace priv&eacute; administrateur", "Gestion des partenaires", "Gestion des plannings des salles de l'espace de co-working","Modification de son mot de passe"],
    "(site encore en construction, en attente des textes que le client doit fournir)"
  ];
  $projet6->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C.",
    "SGBD &rarr; MySql"
  ];

  $projet7 = new Projet();
  $projet7->name = 'Macip-courtage.fr';
  $projet7->techName = 'MacipCourtage';
  $projet7->pathName = 'macip-courtage';
  $projet7->subtitle = "Site vitrine d'un mandataire de courtier en cr&eacute;dits & assurances";
  $projet7->link = 'https://macip-courtage.fr';
  $projet7->nbImages = 5;
  $projet7->descriptionCommerciale = [
    "Site vitrine Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)"
  ];
  $projet7->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C."
  ];

  $projet8 = new Projet();
  $projet8->name = 'Monts-et-lacs-81.fr';
  $projet8->techName = 'MontsEtLacs';
  $projet8->pathName = 'monts-et-lacs-81';
  $projet8->subtitle = "Site vitrine d'une entreprise de gardiennage, gîtes ruraux et location d'engins nautiques";
  $projet8->link = 'https://monts-et-lacs-81.fr';
  $projet8->nbImages = 2;
  $projet8->descriptionCommerciale = [
    "Site vitrine Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    "Formulaire de contact"
  ];
  $projet8->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C."
  ];

  $projet9 = new Projet();
  $projet9->name = 'Msr34.net';
  $projet9->techName = 'Msr34';
  $projet9->pathName = 'msr34';
  $projet9->subtitle = "Site vitrine d'un magasin de motos d'occasion.";
  $projet9->link = 'https://msr34.net';
  $projet9->nbImages = 5;
  $projet9->formatImages = "webp";
  $projet9->descriptionCommerciale = [
    "Site Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    ["Espace priv&eacute; administrateur", "Gestion des messages exceptionnels de fermeture ou d'annonce d'&eacute;v&eacute;nement","Publication/Gestion des annonces de vente de motos","Modification de son mot de passe"]
  ];
  $projet9->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C.",
    "SGBD &rarr; MySql"
  ];

  $projet10 = new Projet();
  $projet10->name = 'Pcf-lcf.fr';
  $projet10->techName = 'PcfLcf';
  $projet10->pathName = 'pcf-lcf';
  $projet10->subtitle = "Site vitrine d'une entreprise de courtage en pr&ecirc;ts immobiliers & assurances";
  $projet10->link = 'https://pcf-lcf.fr';
  $projet10->nbImages = 2;
  $projet10->formatImages = "webp";
  $projet10->descriptionCommerciale = [
    "Site vitrine Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
    "Formulaire de contact"
  ];
  $projet10->descriptionTechnique = [
    ["Langages", "Vanilla JS", "PHP Native", "HTML / CSS"],
    ["Biblioth&egrave;ques","JQuery","BootStrap"],
    "Architecture &rarr; M.V.C."
  ];

  $projets = [$projet1, $projet2, $projet3, $projet4, $projet5, $projet6, $projet7, $projet8, $projet9, $projet10];

?>


    <div id="accueil-realisations" class="accueil-text-boxes">
      <h2>Quelques r&eacute;alisations</h2>
      <p>
        <div id="liste-realisations">

<?php foreach($projets as $projet) { ?>

          <div class="realisations-card" id="card-<?= $projet->techName ?>">
            <div class="realisations-card-header linear-g-<?= $projet->techName ?>">
              <div class="realisations-card-title">
                <?= $projet->name ?>
              </div>
              <div class="realisations-card-subtitle">
                <?= $projet->subtitle ?><br>
              </div>
              <div class="realisations-card-visit">
                <a href="<?= $projet->link ?>" target="_blank">Visiter le site</a>
              </div>
            </div>

            <!-- <div style="background-image: url('img/realisations/actiform/01.jpg');" class="realisations-card-img"> -->
            <div class="realisations-card-img" id="realisations-card-img-<?= $projet->techName ?>">
              <img src="img/realisations/<?= $projet->pathName ?>/1.<?= $projet->formatImages ?>" id="realisations-card-img-<?= $projet->techName ?>-1">
              
              <?php for($i = 2 ; $i <= $projet->nbImages ; $i++) { ?>
                <img src="img/realisations/<?= $projet->pathName ?>/<?= $i ?>.<?= $projet->formatImages ?>" id="realisations-card-img-<?= $projet->techName ?>-<?= $i ?>" class="none">
              <?php } ?>
              <div class="realisations-card-left-arrow realisations-card-arrow" onclick="previousRealisationImg('<?= $projet->techName ?>')">
                &larr;
              </div>
              <div class="realisations-card-right-arrow realisations-card-arrow" onclick="nextRealisationImg('<?= $projet->techName ?>')">
                &rarr;
              </div>
            </div>
            <div class="realisations-card-text">
              <div class="realisations-description-commerciale">
                <h3>Description commerciale</h3>
                <div class="realisations-card-toggle" id="real-toggle-btn-comm-<?= $projet->techName ?>" onclick="toggleUlDescriptionCommerciale('<?= $projet->techName ?>')">+</div>
                <ul class="none" id="real-desc-comm-<?= $projet->techName ?>">
                  <?php foreach($projet->descriptionCommerciale as $li) { 
                    if(is_array($li)){
                      echo "<li>".$li[0]."<ul>";
                      foreach($li as $key => $lis){
                        //echo $key;
                        if($key === 0) continue;
                        echo "<li>".$lis."</li>";
                      }
                      echo "</ul></li>";
                    } else {
                      echo "<li>".$li."</li>";
                    }
                  ?>
                  <?php } ?>
                </ul>
              </div>
              <div class="realisations-description-technique">
              <h3>Description technique</h3>
              <div class="realisations-card-toggle" id="real-toggle-btn-tech-<?= $projet->techName ?>" onclick="toggleUlDescriptionTechnique('<?= $projet->techName ?>')">+</div>
                <ul class="none" id="real-desc-tech-<?= $projet->techName ?>">
                  <?php foreach($projet->descriptionTechnique as $li) { 
                      if(is_array($li)){
                        echo "<li>".$li[0]."<ul>";
                        foreach($li as $key => $lis){
                          //echo $key;
                          if($key === 0) continue;
                          echo "<li>".$lis."</li>";
                        }
                        echo "</ul></li>";
                      } else {
                        echo "<li>".$li."</li>";
                      }
                    ?>
                    <?php } ?>
                </ul>
              </div>
            </div>
          </div>

<?php  } ?>

        </div>
      </p>
    </div>
<!--     
    <div class="accueil-text-boxes" id="div-qui-sommes-nous">
      <h2>Qui suis-je ?</h2>
      <p>
        <h3>
          D&eacute;veloppeur web fullstack - confirm&eacute;
        </h3>
        bla bla
      </p>
      <div id="qui-sommes-nous-visages">
        <div>bla bla</div>
        <div>bla bla</div>
      </div>
    </div>
 -->    
  </div>

</div>


<?php
//$contenu = ob_get_clean();
//require_once('layout.php');