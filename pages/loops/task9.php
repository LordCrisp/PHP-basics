
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "9";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Lav et loop der udskriver tallene 1-7 under hinanden</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre>
  &lt;?php

  for ($i=1; $i <= 7; $i++) {
    echo "$i &lt;br>";
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

for ($i=1; $i <= 7; $i++) {
  echo "$i <br>";
}

?>


<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
