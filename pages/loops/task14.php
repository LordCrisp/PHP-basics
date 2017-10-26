
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "14";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Opret et array med navnet på fire forskellige farver.
Udskriv arrayet med print_r.</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;$x = 10;

for ($i=0; $i < 10 ; $i++) {

  for ($j=0; $j < $x; $j++) {

    if ($j == $x-1) {
      echo "$j";
    }
    else {
      echo "$j, ";
    };

  }
  
  $x = $x - 1;
  echo "&lt;/br>";
}

</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
$x = 10;

for ($i=0; $i < 10 ; $i++) {
  for ($j=0; $j < $x; $j++) {
    if ($j == $x-1) {
      echo "$j";
    }
    else {
      echo "$j, ";
    };
  }
  $x = $x - 1;
  echo "</br>";
}

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
