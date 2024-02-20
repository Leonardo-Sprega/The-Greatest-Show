<body>


    <?php

        $errMsg_register = "";

        if($loggedInUser){
            echo '<script>location.href="http://localhost:3000/public/?page=homepage"</script>';
            exit;
        }

        if(isset($_POST['register-button'])){

            global $dbconn;

            $nome = $_POST['nome'];
            $cognome = $_POST['cognome'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conferma_password = $_POST['conferma_password'];

            if($nome=="" or $cognome=="" or $email=="" or $password=="" or $conferma_password==""){
                $errMsg_register = "Riempire tutti i campi";
                goto E;
            }

            if ($password != $conferma_password){                
                $errMsg_register = "Le Password Non Corrispondono";
                goto E;
            }

            $query = "  SELECT * 
                        FROM utenti 
                        WHERE email = '$email'
                    ";


            $result = pg_query ( $dbconn , $query );
            $rows = pg_num_rows($result);

            if ($rows == 1){
                $errMsg_register = "Email già esistente. Riprovare";
            }
            if ($rows == 0){

                $query = "INSERT INTO utenti(nome, cognome, email , password)
                        VALUES ('$nome','$cognome','$email','$password')";
                        
                $result = pg_query ( $dbconn , $query );

                if (!$result){
                    $errMsg_register = "Errore di Registrazione. Riprovare";
                    goto E;
                }

                $query = "  SELECT * 
                        FROM utenti 
                        WHERE email = '$email' AND password = '$password'    
                    ";
                $result = pg_query ( $dbconn , $query );
                $rows = pg_num_rows($result);
                if ($rows == 0){
                    $errMsg = "Email o Password sbagliate. Riprovare";
                }
                if ($rows == 1){
                    $line = pg_fetch_array($result, 0, PGSQL_NUM);
                    $user = (object)[
                        'id' => $line[0],
                        'nome' => $line[1],
                        'cognome' => $line[2],
                        'email' => $line[3],
                        'password' => $line[4]
                    ];
                    $_SESSION['user'] = $user;
                    echo '<script>location.href="http://localhost:3000/public/?page=homepage"</script>';
                  
                }

            }
    
        E:   
        }


    ?>


    <?php include 'pattern/register-form.php'?>


</body>
