

<?php
session_start();
$page = isset($_GET["page"]) ? $_GET["page"] : 'login';
?>

<?php include '../inc/pages/init.php'?>

<?php include  '../public/pattern/header.php'?>


<?php  
    $arr = ['login','logout','register'];

    $verifica = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($page == $arr[$i]){
            $verifica = true;
            include  '../auth/pages/'. $page . '.php';
        }
    }

    if ($verifica == false){
        $page = 'login';
        include  '../auth/pages/'. $page . '.php';
    }


?>
   


<?php include  '../public/pattern/footer.php'?>