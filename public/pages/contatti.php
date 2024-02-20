<link rel="stylesheet" type="text/css" href="../../assets/css/contatti.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<?php

    if(isset($_POST['contatti-button'])){
        echo '<script>location.href="http://localhost:3000/public/?page=homepage"</script>';
    }


?>

<body>
    <div class="titoloContatti">Serve aiuto o vuoi entrare a far parte del nostro team? <br>
        Non esitare a contattarci attraverso i nostri social!</div>

    <div class="parteContatti">


        <div class="contenitore">

                <a class="facebook" href = "https://www.facebook.com/groups/242994520405411" ></a>          
                <div class="titoloSocial">Facebook</div>
           
        </div>


        <div class="contenitore">
     
                <a class="twitter" href="https://twitter.com/GreatestLive"></a>
                <div class="titoloSocial">Twitter</div>
         
        </div>


        <div class="contenitore">
          
                <a class="instagram" href="https://www.instagram.com/the.greatest.show/"></a>
                <div class="titoloSocial">Instagram</div>

            </div>
        </div>

    </div>





    <div class="titoloAssistenza">Oppure se vuoi, usa uno dei nostri recapiti!</div>

    <div class="recapiti">
        <div class="info">
            <div class="testo">Numero telefonico: <br>3469627278</div>
        </div>
        <div class="info">
            <div class="testo">Email: <br>thegreatestshow@gmail.com</div>
        </div>
    </div>

    <div class="titoloForm">In alternativa,<br>
        Compila questo form 
        e ti risponderemo all'email segnata il prima possibile!</div>



    <form class="contatti-form" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
            <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="prova@example.it">
        </div>

        <div class="mb-3">
            <label class="form-label">Motivo per cui ci contatti:</label>
            <textarea type="text" class="textarea" placeholder="Scrivi qui (Max. 500 caratteri)" cols="100" rows="5" maxlength="500"></textarea> 
        </div>

        <button name="contatti-button" class="contatti-bottone">Invia</button>
    </form>

</body>



<script src="../../assets/js/navbar/navbar-contatti.js"></script>