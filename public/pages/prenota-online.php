
<body>

    <?php

        if(isset($_POST['citta-button'])){
            $citta = $_POST["selezione-citta"];
            if ($citta == 'milano'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-milano"</script>';
            }
            if ($citta == 'firenze'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-firenze"</script>';
            }
            if ($citta == 'roma'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-roma"</script>';
            }
            if ($citta == 'venezia'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-venezia"</script>';
            }
            if ($citta == 'torino'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-torino"</script>';
            }
            if ($citta == 'napoli'){
                echo '<script>location.href="http://localhost:3000/public/?page=prenota-napoli"</script>';
            }
        }

    ?>

    <?php include 'pattern/prenota-form.php'?>       
  
</body>


