<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Greatest Show</title>
    
    <link rel = "stylesheet" type = "text/css" href = "../../assets/css/header.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>



<div class="header">
    <div class="logo">
        <a class="logo-img" href = "http://localhost:3000/public/?page=homepage" ></a>
        <div class="intro" > 
            <div class="intro-testo">
                Il Circo più antico del Mondo<br>
            </div>
            <div class="intro-testo-data">
                 dal 1872
            </div>
        </div>
    </div>

</div>

<div class="navbar-mio">

    <div class="nav-menu">
        <i class="fa-solid fa-bars nav-menu-icona"></i>
    </div>


    
    <div class="navbar-link">
        <u1>
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=homepage" > <i class="fa-solid fa-house "></i>  Home </a></li>
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=tour" >  Tour </a></li>
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=prenota-online" >  Prenota Online </a></li>
            
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=prezzi" >  Prezzi </a></li>
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=scopri-chi-siamo" > Chi Siamo </a></li>
            <li><a class = "a-normal" href = " http://localhost:3000/public/?page=contatti" > </i> Contatti </a></li>
            
            <?php if(!$loggedInUser) : ?>
                <li><a class = "a-special" href = "http://localhost:3000/auth/?page=login"> <i class="fa-solid fa-right-to-bracket"></i></i>   Login </a></li>
            <?php endif; ?>
            
            <?php if($loggedInUser) : ?>
                <li><a class = "a-special" href = "http://localhost:3000/user/?page=profile"> <i class = "fa-solid fa-user "> </i> <?php echo $loggedInUser->nome; ?> </a></li>
                <li><a class = "a-special" href = "http://localhost:3000/auth/?page=logout" > <i class="fa-solid fa-right-from-bracket"></i>  Logout </a></li>
            <?php endif; ?>

        </u1>
    </div>




</div> ]]

<script src="../../assets/js/menu-tendina.js"></script>
<script src="../../assets/js/navbar/navbar-header.js"></script>






