function validator() {
    var x = 0;
    var password = document.getElementById('exampleInputPassword1').value;
    var bar = document.getElementById("barra");

    //controllo numeri
    var check=/[0-9]/;
    if(check.test(password)){
      x += 20;
    }
    //controllo minuscole
    var check2=/[a-z]/;
    if(check2.test(password)){
        x += 20;
    }
    //controllo maiuscole
    var check3=/[A-Z]/;
    if(check3.test(password)){
        x += 20;
    }
    //controllo simboli
    var check4=/[$-/:-?{-~!"^_`\[\]]/;
    if(check4.test(password)){
        x += 20;
    }
    // controllo lunghezza (minore o uguale a 10 caratteri)
    if(password.length >= 8){
        x += 20;
    }
  
    // risultato
    bar.style.width = x + "%";
    // voto massimo 100

    if (x == 100) {
      bar.style.backgroundColor = "green";
    }
    if (x <= 80) {
        bar.style.backgroundColor = "#00FF00";
      }
    if (x <=60) {
      bar.style.backgroundColor = "#FF9900";
    }
    if (x <=40) {
      bar.style.backgroundColor = "yellow";
    }
    //voto minimo 20
    if (x <=20) {
      bar.style.backgroundColor = "red";
    }
    if (x == 0) {
        x = 1;
        bar.style.width = x + "%";
        bar.style.backgroundColor = "red";
    }
  }