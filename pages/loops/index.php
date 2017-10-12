
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "1";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Skriv nedenstående kode</h4> <br>
  <h5>Undersøg hvad der udskrives, få eventualt tallene til at stå pænere</h5><br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $maxNumber = 10;
  $counter = 0;

  while ($counter <= $maxNumber) {
    echo "&lt;span>$counter   &lt;/span>";
    $counter++;
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

$maxNumber = 10;
$counter = 0;

while ($counter <= $maxNumber) {
  echo "<span>$counter  </span>";
  $counter++;
}

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
