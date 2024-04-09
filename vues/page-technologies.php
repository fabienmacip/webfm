<div id="mes-technos-div">
    <h1>MES TECHNOS</h1>

<?php 
    class Techno {
        public $name;
        public $img;

        function __construct($name, $img){
            $this->name = $name;
            $this->img = $img;
        }
    }

    $techno1 = new Techno("Javascript","javascript.png");
    $techno2 = new Techno("Angular","angular.png");
    $techno3 = new Techno("PHP","php.png");
    $techno4 = new Techno("MySQL","mysql.png");
    $techno5 = new Techno("Node.js & Express.js","express_et_node.svg");
    $techno6 = new Techno("MongoDB","mongodb.svg");
    $techno7 = new Techno("Mongoose","mongoose.png");
    $techno8 = new Techno("Pug","pug.svg");

    $technos = [$techno1, $techno2, $techno3, $techno4, $techno5, $techno6, $techno7, $techno8];
?>

    <div id="main-technologies">

    <?php foreach($technos as $techno) { ?>

        <div class="box">
            <div>
                <?= $techno->name ?><br><br>
            </div>
            <div class="flex flex-column jcc aic">
                <a href="#">
                    <img src="img/technos/<?= $techno->img ?>" alt="<?= $techno->name ?>">
                </a>
            </div>
        </div>

    <?php } ?>        

    </div>
</div>



