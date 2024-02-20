

<?php
session_start();
$page = isset($_GET["page"]) ? $_GET["page"] : 'profile';
?>

<?php include '../inc/pages/init.php'?>

<?php include  '../public/pattern/header.php'?>

<?php  

    if ($page == 'profile'){
        include  '../user/pages/'. $page . '.php' ;
    }
    else{
        $page = 'profile';
        include  '../user/pages/'. $page . '.php' ;
    }

?>



<?php include  '../public/pattern/footer.php'?>