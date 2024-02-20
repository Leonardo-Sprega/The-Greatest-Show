

<link rel = "stylesheet" type = "text/css" href = "../../assets/css/profile-box.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="profile-box">

    <div class="nome">
        <p class="testo-profile">Nome:</p>
        <label for="exampleInputEmail1" class="form-label special"> <?php echo "$loggedInUser->nome" ?> </label>
    </div>

    <div class="nome">
        <p class="testo-profile">Cognome:</p>
        <label for="exampleInputEmail1" class="form-label special"> <?php echo  "$loggedInUser->cognome"; ?> </label>
    </div>
   
    <div class="nome">
        <p class="testo-profile">Email:</p>
        <label for="exampleInputEmail1" class="form-label special"><?php echo $loggedInUser->email; ?> </label>
    </div>
  

    <p class="testo-profile pren">Biglietti prenotati: </p>
    <label class="form-label biglietti-prenotati">
        <?php

            global $dbconn;
            $query = "  SELECT *
                        FROM profilo 
                        WHERE email = '$loggedInUser->email'
            ";
            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            while ( $line = pg_fetch_array ( $result , null , PGSQL_ASSOC )) {

                echo  "<div class = \"scritta-citta\"> " . $citta = $line['citta']. "</div>";

                echo " <p> Vip: " . $vip = $line['vip'] . " &nbsp &nbsp &nbsp &nbsp </p>" ;
                
                echo " <p> 1° Anello: " . $primo = $line['primo']. " &nbsp &nbsp &nbsp &nbsp  " ;
                
                echo " 2° Anello: " . $secondo = $line['secondo'] . " &nbsp &nbsp &nbsp &nbsp  ";
                
                echo "  3° Anello: " . $terzo = $line['terzo'] . " </p>";

            
                $soldi = 50 * intval($vip) + 25 * intval($primo) + 15 * intval($secondo) + 10 * intval($terzo);
                $sconto = $soldi/10;
                $totale = $soldi - $sconto;
                echo "<div class = \"scritte-saldo-sconto\">";

                echo "<p class = \"scritta-saldo\"> Totale:&nbsp  $totale € </p>";
                echo "<div class = \"scritta-sconto\"> sconto del 10% applicato </div>";

                echo "</div>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
    
                
            }

        ?>
    </label>



</div>






<script src="../../assets/js/navbar/navbar-profile.js"></script>