<?php
//ob_start();
?>

<div class="m-0 max-width-100vw">
  <div id="div-image-accueil" class="box">
      D&eacute;veloppeur&nbsp;<span class="span-br"><br></span>Web Fullstack
  </div>

  <div class="row max-width-100percent jcc wrap" id="accueil-text-boxes">
    <div class="accueil-text-boxes" id="accueil-sport-plaisir">
      <h2>Bienvenue chez WEBFM</h2>
  
      <h3>D&eacute;veloppeur web fullstack</h3>

      <div id="image-accueil-text">
        JavaScript (Vanilla) & Angular<br>
        CSS & Bootstrap<br>
        PHP (Native) & Symfony<br>
        Node.js & Express.js<br>
        MySQL - MongoDB<br>
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
    public $descriptionCommerciale;
    public $descriptionTechnique;
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
  $projet2->link = 'https://appartement-rentable.fr';
  $projet2->nbImages = 2;
  $projet2->descriptionCommerciale = [
    "Blog Responsive (adapt&eacute; &agrave; toutes tailles d'&eacute;crans)",
  ];
  $projet2->descriptionTechnique = [
    "CMS &rarr; WordPress",
  ];

  $projets = [$projet1, $projet2];

?>


    <div id="accueil-realisations" class="accueil-text-boxes">
      <h2>Quelques projets</h2>
      <p>
        <div id="liste-realisations">

<?php foreach($projets as $projet) { ?>

          <div class="realisations-card" id="card-actiform">
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
            <div class="realisations-card-img" id="realisations-card-img-Actiform">
              <img src="img/realisations/<?= $projet->pathName ?>/1.jpg" id="realisations-card-img-<?= $projet->techName ?>-1">
              
              <?php for($i = 2 ; $i <= $projet->nbImages ; $i++) { ?>
                <img src="img/realisations/<?= $projet->pathName ?>/<?= $i ?>.jpg" id="realisations-card-img-<?= $projet->techName ?>-<?= $i ?>" class="none">
              <?php } ?>
              <div class="realisations-card-left-arrow realisations-card-arrow" onclick="previousRealisationImg('Actiform')">
                &larr;
              </div>
              <div class="realisations-card-right-arrow realisations-card-arrow" onclick="nextRealisationImg('Actiform')">
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