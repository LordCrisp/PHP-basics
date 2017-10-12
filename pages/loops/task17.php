
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "17";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Gør det samme som i opgave 3, men benyt funktionen shuffle.
Udskriv begge arrays før og efter sortering med print_r.</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
  foreach($kategorier as $key => $value) {}

  print_r($kategorier);;


  shuffle($kategorier);{}

  print_r($kategorier);
  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
$kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
foreach($kategorier as $key => $value) {}

print_r($kategorier);;
echo "<br>";


shuffle($kategorier);{}

print_r($kategorier);
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
