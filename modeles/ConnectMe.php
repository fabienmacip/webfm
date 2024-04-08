<?php 

    $pdo = null;
    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=actiform;charset=utf8', 'root', '');
        //$pdo = new PDO('mysql:host=185.98.131.158;dbname=actif2291688;charset=utf8', 'actif2291688', 'mmcwzh6rr3');
        //$pdo = new PDO('mysql:host=91.216.107.186;dbname=pcflc2061683;charset=utf8', 'pcflc2061683', 'bkfeqkigwu');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }


