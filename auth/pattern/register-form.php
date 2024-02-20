
<link rel = "stylesheet" type = "text/css" href = "../../assets/css/register-form.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<div class="register-form">

    <form method="post">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input name = "nome"  class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cognome</label>
            <input name = "cognome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
            <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="testo-password">Consigliato inserire almeno un carattere: Minuscolo , MAIUSCOLO , Speciale ed una Cifra </div>

            <div class="reg-pass">
                <input name = "password" type="password" class="form-control controllo-2" id="exampleInputPassword1" onkeyup="validator()">
                <i class="fa-regular fa-eye fa-xl  occhio" onclick="showPwd()"></i>
            </div>

            <div class="barra" id="barra"></div>
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>

            <div class="reg-pass">
                <input name = "conferma_password" type="password" class="form-control controllo-2" id="exampleInputPassword2">
                <i class="fa-regular fa-eye fa-xl  occhio" onclick="showPwd2()"></i>
            </div>

        </div>

        <?php global $errMsg_register; if($errMsg_register!="") : ?>
            <div class="testo-errore">
                <?php
                global $errMsg_register; 
                echo $errMsg_register; 
                ?>
            </div>
        <?php endif; ?>

        <div class="register-button">
            <button name="register-button" class="bottone" id = "registerbutton">Registrati e Accedi</button>
        </div>
        

    </form>



</div>


<script src="../../assets/js/password.js"></script>
<script src="../../assets/js/navbar/navbar-register.js"></script>
<script src="../../assets/js/register-mostra-pass.js"></script>


