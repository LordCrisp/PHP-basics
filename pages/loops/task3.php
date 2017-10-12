
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "3";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


<h4>Undersøg hvad der udskrives. Kommentér hver linje i scriptet. Hvordan får du udskrevet tallene fra 1 til 1000 i stedet?</h4> <br>
<h5 class="side2">1 - 1000 opnåes nemt ved at ændre $i variablen i starten af for loopet og sætte et = tegn efter < i condition'en (for <span class="side1">($i = 1; $i <= 1000; $i++)</span>)</h5><br>
    <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php</pre>
  <h6 class="side2">Starter med en tom Output variabel</h6>
  <pre>$output = '';
  for ($i = 0; $i < 1000; $i++) {</pre>
  <h6 class="side2"> at skrive . foran = ved en variabel gør at det der kommer efter, bliver tilføjet EFTER nuværende værdi, istedet for at erstatte den</h6>
  <pre>$output .= $i . ' - ';
  }
</pre>
<h6 class="side2">Sletter den sidste bindestreg i variablen</h6>
  <pre>$output = trim($output, ' - ');
  echo "<span>$output   </span>";
?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php

$output = '';
for ($i = 0; $i < 1000; $i++) {
$output .= $i . ' - ';
}


echo "<br> <br>";
$output = trim($output, ' - ');
echo "<span>$output   </span>";

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
