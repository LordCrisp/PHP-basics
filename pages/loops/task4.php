
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "4";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


<h4>Skriv nedenstående kode og undersøg hvad der udskrives</h4> <br>
<h5 class="side2">Udskriften bliver $i forest og $j bagved</h5><br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
       echo $i . $j . '-';
    }
    echo '<br>';
  }

  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j < 10; $j++) {
     echo $i . $j . '-';
  }
  echo '<br>';
}
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
