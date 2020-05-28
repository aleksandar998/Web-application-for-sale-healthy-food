<?php
   $kolicina1 = $_POST['kolicina1'];
   $kolicina2 = $_POST['kolicina2'];
   $kolicina3 = $_POST['kolicina3'];
   $adresa = $_POST['adresa']; 
?>

   <!DOCTYPE html>
   <html>
   <head>
   	<title> Prodavnica </title>
   </head>
   <body>
   	    <h1> Obavljeno narucivanje </h1>
   	    <h2> Fiskalni racun </h2>
   	    <?php
   	       $date = date("F j, Y, g:i a");
   	       echo '<p> Roba je narucena u ';
   	       echo $date;
   	       echo '</p><p>Kulipi ste sledece: </p>';
   	       $ukupno = 0;
   	       $ukupno = $kolicina1 + $kolicina2 + $kolicina3;
   	       echo 'Ukupno kupljenih proizvoda ima: ' .$ukupno . '<br>';

   	       if ($ukupno == 0 ) 
   	       {
   	           echo "Korpa je prazna! <br>";
   	       }
   	       else
   	       {
   	       	if ($kolicina1 > 0 )
   	       		echo "Go g sok. Kolicina:  " . $kolicina1 . " <br>";
   	       	if ($kolicina2 > 0 )
   	       		echo "Humus namaz. Kolicina:   " . $kolicina2 . " <br>";
   	       	if ($kolicina3 > 0 )
   	       		echo "Rice cake. Kolicina:  " . $kolicina3 . "<br>";
   	       }

   	       $ukupnac= 0.00;
   	       define('cena1', 750);
   	       define('cena2', 650);
   	       define('cena3', 700);
           
           $ukupnac = $kolicina1 * cena1 + $kolicina2 * cena2 + $kolicina3 * cena3;
           $ukupnac = number_format($ukupnac, 2, ',' , '.');

           echo '<p> Ukupna suma racuna: ' . $ukupnac . 'dinara</p>';
           echo '<p> Isporuka na adresu: ' . $adresa . '</p>';

           $izlaz = $date . "\t" . $kolicina1 . "Go g sok, \t" . $kolicina2 . "Humus namaz, \t" . $kolicina3 . "Rice cake, \t" . $ukupnac . "\t" . $adresa . "\n\n";

           $fp = fopen("narudzbina.txt", 'a');
           flock($fp, LOCK_EX);
           if (!$fp) 
           {
           	  echo '<p><strong> Vasa porudzbina ne moze biti obradjena trenutno. Pokusajte kasnije. </strong> </p> </body> </html>';
           	  exit;
           }
           fwrite($fp, $izlaz, strlen($izlaz));
           flock($fp, LOCK_UN);
           fclose($fp);
           echo '<p>Podaci su sacuvani. </p>';
   	    ?>
   
   </body>
   </html>