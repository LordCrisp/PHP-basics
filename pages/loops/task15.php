
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "15";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Opret et key array med fire forskellige bilmærker. Udskriv arrayet med print_r</h4> <br>


<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $carBrands = array(
    "VW" => "NaziSlæde",
    "BMW" => "Bayerische Motoren Werke",
    "MZ"  => "Mazda",
    "FD" => "Ford Motor Company"
  );

  print_r($carBrands);
  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
$carBrands = array(
  "VW" => "NaziSlæde",
  "BMW" => "Bayerische Motoren Werke",
  "MZ"  => "Mazda",
  "FD" => "Ford Motor Company"
);

print_r($carBrands);
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
