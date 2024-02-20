
<link rel = "stylesheet" type = "text/css" href = "../../assets/css/prenota-form-citta.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php

    function mostra_posti($citta , $tipo){
        global $dbconn;
        $query = "  SELECT biglietti.$tipo
                    FROM biglietti 
                    WHERE citta = '$citta'   
        ";
        $result = pg_query ( $dbconn , $query );
        $rows = pg_num_rows($result);

        if ($rows == 1){
            $line = pg_fetch_array($result, 0, PGSQL_NUM);
        }
        $posti = $line[0];
        return $posti-1;
    }


    $errMsg = "";
    if(isset($_POST['biglietti-button'])){

        if($loggedInUser == null){
            $errMsg = "Eseguire il Login per prenotare i biglietti";
            goto E;
        }

        $vip = $_POST['vip'];
        $primo = $_POST['primo-anello'];
        $secondo = $_POST['secondo-anello'];
        $terzo = $_POST['terzo-anello'];


        if($vip==""){$vip = 0;}
        if($primo==""){$primo = 0;}
        if($secondo==""){$secondo = 0;}
        if($terzo==""){$terzo = 0;}

        if($vip==0 and $primo==0 and $secondo==0 and $terzo==0 ){
            $errMsg = "Selezionare almeno un Biglietto";
            goto E;
        }


        if($vip > mostra_posti('firenze','vip')){
            $errMsg = "Numero dei biglietti richiesti non disponibile";
            goto E;
        }
        if($primo > mostra_posti('firenze','primo')){
            $errMsg = "Numero dei biglietti richiesti non disponibile";
            goto E;
        }
        if($secondo > mostra_posti('firenze','secondo')){
            $errMsg = "Numero dei biglietti richiesti non disponibile";
            goto E;
        }
        if($terzo > mostra_posti('firenze','terzo')){
            $errMsg = "Numero dei biglietti richiesti non disponibile";
            goto E;
        }




        if($vip > 0){
            global $dbconn;
            $query = "  SELECT biglietti.vip
                        FROM biglietti 
                        WHERE citta = 'firenze'   
            ";
            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            if ($rows == 1){
                $line = pg_fetch_array($result, 0, PGSQL_NUM);
            }
            $posti = $line[0];
            $posti_rimanenti = $posti - $vip;

            if($posti_rimanenti <= 0){
                $errMsg = "Numero dei biglietti richiesti non disponibile";
                goto E;
            }

            $query = "  UPDATE biglietti
                        SET vip = $posti_rimanenti
                        WHERE citta = 'firenze';  
            ";
            $result = pg_query ( $dbconn , $query );
        }
        if($primo > 0){
            global $dbconn;
            $query = "  SELECT biglietti.primo
                        FROM biglietti 
                        WHERE citta = 'firenze'   
            ";
            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            if ($rows == 1){
                $line = pg_fetch_array($result, 0, PGSQL_NUM);
            }
            $posti = $line[0];
            $posti_rimanenti = $posti - $primo;

            if($posti_rimanenti <= 0){
                $errMsg = "Numero dei biglietti richiesti non disponibile";
                goto E;
            }

            $query = "  UPDATE biglietti
                        SET primo = $posti_rimanenti
                        WHERE citta = 'firenze';  
            ";
            $result = pg_query ( $dbconn , $query );
        }
        if($secondo > 0){
            global $dbconn;
            $query = "  SELECT biglietti.secondo
                        FROM biglietti 
                        WHERE citta = 'firenze'   
            ";
            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            if ($rows == 1){
                $line = pg_fetch_array($result, 0, PGSQL_NUM);
            }
            $posti = $line[0];
            $posti_rimanenti = $posti - $secondo;

            if($posti_rimanenti <= 0){
                $errMsg = "Numero dei biglietti richiesti non disponibile";
                goto E;
            }

            $query = "  UPDATE biglietti
                        SET secondo = $posti_rimanenti
                        WHERE citta = 'firenze';  
            ";
            $result = pg_query ( $dbconn , $query );
        }
        if($terzo > 0){
            global $dbconn;
            $query = "  SELECT biglietti.terzo
                        FROM biglietti 
                        WHERE citta = 'firenze'   
            ";
            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            if ($rows == 1){
                $line = pg_fetch_array($result, 0, PGSQL_NUM);
            }
            $posti = $line[0];
            $posti_rimanenti = $posti - $terzo;

            if($posti_rimanenti <= 0){
                $errMsg = "Numero dei biglietti richiesti non disponibile";
                goto E;
            }

            $query = "  UPDATE biglietti
                        SET terzo = $posti_rimanenti
                        WHERE citta = 'firenze';  
            ";
            $result = pg_query ( $dbconn , $query );
        }


        global $dbconn;
        $email_utente = $loggedInUser->email;
        $query = "  INSERT INTO profilo(email,citta ,vip, primo , secondo ,terzo)
                    VALUES ('$email_utente', 'Firenze' , $vip , $primo , $secondo , $terzo )";
            
        $result = pg_query ( $dbconn , $query );

        echo '<script>location.href="http://localhost:3000/public/?page=prenota-OK"</script>';

        E: 
    }


?>
<script>
    function mostra_prezzo() {
        var prezzo_vip = 0;
        var prezzo_primo = 0;
        var prezzo_secondo = 0;
        var prezzo_terzo = 0;

        var vip = document.getElementById("vip").value;
        var primo = document.getElementById("primo").value;
        var secondo = document.getElementById("secondo").value;
        var terzo = document.getElementById("terzo").value;

        console.log(vip);
        console.log(primo);
        console.log(secondo);
        console.log(terzo);

        if(vip > 0){
            var prezzo_vip = vip*50;
        }
        if(primo > 0){
            var prezzo_primo = primo*25;
        }
        if(secondo > 0){
            var prezzo_secondo = secondo*15;
        }
        if(terzo > 0){
            var prezzo_terzo = terzo*10;
        }

        var totale = (prezzo_vip + prezzo_primo + prezzo_secondo + prezzo_terzo)*0.9;

        var finale = ":  "+ totale+" €";

        document.getElementById("prop").innerHTML = finale;

    }



</script>

<div class="biglietti-form" >

    <form method="post" >

        <label class="form-label testo-titolo">FIRENZE </label>
        <br>
        <label class="form-label testo-biglietti">Numero Biglietti: </label>

        <div class="mb-3">
            <label class="form-label">VIP GOLD </label>
            <div class="form-outline disponibilita">
                <input min="0" type="number" id="vip" class="form-control" name = "vip" onchange="mostra_prezzo()"/>
                <div class="posti"><?php echo('Posti disponibili: ' . mostra_posti('firenze', 'vip')); ?> </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">1° Anello VIP</label>
            <div class="form-outline disponibilita">
                <input min="0" type="number" id="primo" class="form-control" name = "primo-anello" onchange="mostra_prezzo()"/>
                <div class="posti"><?php echo('Posti disponibili: ' . mostra_posti('firenze' , 'primo')); ?> </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">2° Anello</label>
            <div class="form-outline disponibilita">
                <input min="0" type="number" id="secondo" class="form-control" name = "secondo-anello" onchange="mostra_prezzo()"/>
                <div class="posti"><?php echo('Posti disponibili: ' . mostra_posti('firenze' , 'secondo')); ?> </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">3° Anello</label>
            <div class="form-outline disponibilita">
                <input min="0" type="number" id="terzo" class="form-control" name = "terzo-anello" onchange="mostra_prezzo()"/>
                <div class="posti"><?php echo('Posti disponibili: ' . mostra_posti('firenze' , 'terzo')); ?> </div>
            </div>
        </div>


        <?php global $errMsg; if($errMsg!="") : ?>
            <div class="testo-errore">
                <?php
                    global $errMsg; 
                    echo $errMsg; 
                ?>
            </div>
        <?php endif; ?>


        <div class="prenota-biglietti">
            <button name="biglietti-button" class="biglietti-bottone">
                Prenota Ora
                <p id="prop" class="prezzi-totale"></p>
            </button>
            <div class="prenota-biglietti-testo">
                <label for="exampleInputPassword1" class="login-form-label">
                    Le ricordiamo che dovrà presentarsi davanti alla cassa con la <br> prenotazione per Acquistare il biglietto
                </label>
            </div>
        </div>


    </form>

</div>


<script src="../../assets/js/navbar/navbar-prenota.js"></script>
