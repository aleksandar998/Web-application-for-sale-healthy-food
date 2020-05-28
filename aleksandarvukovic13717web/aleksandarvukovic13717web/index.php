<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Prodaja zdrave hrane">
  <meta name="keywords" content="voće, povrće, orašasti plodovi, zdravi namazi, ulja, hranljivi sastojci">
  <meta name="author" content="Aleksandar Vukovic, aleksandar13717@its.edu.rs">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Healthy shop</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/mojstil.css" rel="stylesheet">
</head>
<body onload="Vreme(), citati()" style="background-image: url(img/carousel/healthy-food-3.jpeg); min-height: 300px; background-position: center; background-repeat: no-repeat; background-size: cover; position:"> <!-- event handlers -->
  <div class="container"><!-- pocetak omotaca -->
    <?php include "php/headeer.php"; ?>
    <?php include "php/nav.php"; ?>
    <?php include "php/main.php"; ?>
    <?php include "php/article.php"; ?>
    <?php include "php/footer.php"; ?>

  </div><!-- kraj omotaca -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vreme.js"></script>
<script src="js/citati.js"></script>
<script type="text/javascript">
  document.getElementById("proizvodi").addEventListener("submit", ukupanIznos); 

  function ukupanIznos(event) {
    event.preventDefault(); 

    if (document.getElementById("s-grad").value === '') {
      alert("  --  Molimo unesite vaš grad  --  "); 
    }

    var kolPrvi = parseInt(document.getElementById("jedan").value, 10) || 0, 
    kolDrugi = parseInt(document.getElementById("dva").value, 10) || 0,  
    kolTreci = parseInt(document.getElementById("tri").value, 10) || 0,
    grad = document.getElementById("s-grad").value;
    var methods = document.getElementById("proizvodi").r_method,
    isporukaMetod;

    for (var i = 0; i < methods.length; i++) { 
      if (methods[i].checked == true) {
        isporukaMetod = methods[i].value;  
      }
    }

    var pdvIznos = 1;
    if (grad === "DR") {
    pdvIznos = 1.20; 
  }
  
  var cenaIsporukePo = 0;
  switch (isporukaMetod) {  
    case "preuzimanje" :   
    cenaIsporukePo = 0; 
    break;  
    case "kompanijski" :
    cenaIsporukePo = 15;
    break;
    case "postexpres" :
    cenaIsporukePo = 10;
    break;
  }
  var ukupnoProizvoda = kolPrvi + kolDrugi + kolTreci,
  isporukaCena = ukupnoProizvoda * cenaIsporukePo;
  
  var bezIsporuke = ((kolPrvi * 750) + (kolDrugi * 650) + (kolTreci * 700)) * pdvIznos;
  
  var izracunaj = "dinara: " + (bezIsporuke + isporukaCena).toFixed(2); 
  
  document.getElementById("txt-izracunaj").value = izracunaj;
  
  document.getElementById("rezultati").innerHTML = "Ukupno proizvoda: " + ukupnoProizvoda + '<br>';
  document.getElementById("rezultati").innerHTML += "Cena isporuke: " + isporukaCena.toFixed(2) + '<br>';
  document.getElementById("rezultati").innerHTML += "PDV: " + ((pdvIznos - 1) * 100).toFixed(2) + '%';
}
</script> 
</body>
</html>