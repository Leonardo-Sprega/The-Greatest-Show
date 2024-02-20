
<link rel = "stylesheet" type = "text/css" href = "../../assets/css/login-form.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<div class="login-form" >
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
            <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="reg-pass">
                <input name = "password" type="password" class="form-control" id="exampleInputPassword3">
                <i class="fa-regular fa-eye fa-xl  occhio" onclick="showPwd3()"></i>
            </div>
        </div>

        <button name="login-button" class="login-bottone">Accedi</button>
        
        <?php global $errMsg; if($errMsg!="") : ?>
            <div class="testo-errore">
                <?php
                    global $errMsg; 
                    echo $errMsg; 
                ?>
            </div>
        <?php endif; ?>
    </form>




    <div class="login-registrati-ora">
        <div class="login-testo-registrati">
            <label for="exampleInputPassword1" class="login-form-label">Non hai un Account?</label>
        </div>

        <a href="http://localhost:3000/auth/?page=register" class="login-bottone ">Registrati Ora</a>
    </div>


</div>

<script src="../../assets/js/navbar/navbar-login.js"></script>
<script src="../../assets/js/login-mostra-pass.js"></script>

