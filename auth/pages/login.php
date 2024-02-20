


<body>


    <?php

        $errMsg = "";

        if($loggedInUser){
            echo '<script>location.href="http://localhost:3000/public/?page=homepage"</script>';
            exit;
        }
        
        if(isset($_POST['login-button'])){

            global $dbconn;

            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email=="" or $password==""){
                $errMsg = "Riempire tutti i campi";
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
        E: 
        }


    ?>


    <?php include 'pattern/login-form.php'?>


</body>
