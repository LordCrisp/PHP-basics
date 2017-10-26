
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "15";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Opret et key array med fire forskellige bilmærker. Udskriv arrayet med print_r</h4> <br>


<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $x = 10;

  for ($i=0; $i < 10 ; $i++) {
    for ($j=0; $j < $x; $j++) {
      if ($x & 1) {
        if ($j == $x-1) {
          echo "$j";
        }
        else {
          echo "$j, ";
        };
      }
    }
    $x = $x - 1;
    echo "&lt;/br>";
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
$x = 10;

for ($i=0; $i < 10 ; $i++) {
  for ($j=0; $j < $x; $j++) {
    if ($x & 1) {
      if ($j == $x-1) {
        echo "$j";
      }
      else {
        echo "$j, ";
      };
    }
  }
  $x = $x - 1;
  echo "</br>";
}

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
