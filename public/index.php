

<?php
session_start();
$page = isset($_GET["page"]) ? $_GET["page"] : 'homepage';
?>

<?php include '../inc/pages/init.php'?>



<?php include '../public/pattern/header.php'?>

<?php  
    $arr = ['contatti','homepage'
            ,'prenota-firenze','prenota-milano','prenota-napoli'
            ,'prenota-online','prenota-roma','prenota-torino','prenota-venezia',
            'prenota-OK','prezzi','scopri-chi-siamo','tour'];

    $verifica = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($page == $arr[$i]){
            $verifica = true;
            include '../public/pages/'. $page . '.php';
        }
    }

    if ($verifica == false){
        $page = 'homepage';
        include '../public/pages/'. $page . '.php';
    }


?>



<?php include '../public/pattern/footer.php'?>