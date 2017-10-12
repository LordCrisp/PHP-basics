
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "14";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Opret et array med navnet på fire forskellige farver.
Udskriv arrayet med print_r.</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  $colors[] = "Blå";
  $colors[] = "Rød";
  $colors[] = "Grøn";
  $colors[] = "Gul";

  print_r($colors);
  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php

$colors[] = "Blå";
$colors[] = "Rød";
$colors[] = "Grøn";
$colors[] = "Gul";

print_r($colors);
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
