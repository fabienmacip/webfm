<div id="mon-cv-div">
    <h1>D&eacute;veloppeur web Fullstack</h1>
    <br>
    <div class="tc mb-15">
        <a href="assets/doc/CV_Fabien_MACIP.pdf" target="_blank" class="link-to-pdf">Voir/T&eacute;l&eacute;charger CV au format PDF</a>
    </div>
<!--     <iframe
        id="iframe-cv"
        title="CV Fabien MACIP"
        width="100%"
        
        src="assets/doc/CV_Fabien_MACIP.pdf"
    >
    </iframe>
 -->
    <div id="mon-cv-imgs">
        <?php for($i = 1; $i < 8 ; $i++) { ?>
            <img src="assets/img/CV_Fabien_MACIP_page-000<?= $i ?>.jpg" alt="CV_Fabien_MACIP_page-000<?= $i ?>">
            <br>
            Page <?= $i ?>/7
            <br>
        <?php } ?>
    </div>
</div>