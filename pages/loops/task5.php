
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "5";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Lav en løkke, der kan udskrive tallene fra 1 til 100. Sæt resultatet op i 10 x 10 rækker</h4> <br>


<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $maxNumber = 100;
  $counter = 1;
  $luckyNumber = 10;

  while ($counter <= $maxNumber) {
    echo "&lt;span>$counter  &lt;/span>";
    if ($counter==$luckyNumber) {
      echo "&lt;br>";
      $luckyNumber = $luckyNumber +10;
    };
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
  $maxNumber = 100;
  $counter = 1;
  $luckyNumber = 10;

  while ($counter <= $maxNumber) {
    echo "<span>$counter  </span>";
    if ($counter==$luckyNumber) {
      echo "<br>";
      $luckyNumber = $luckyNumber +10;
    };
    $counter++;
  }
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
