
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "7";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Udskriv en tabel hvor der er 2 kolonner den ene starter ved 10 og tæller nedad og den anden starter ved 0 og tæller opad. Det skal laves i en while eller do-while - løkke.</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

&lt;table>
<pre> &lt;?php

  $maxNumber = 10;
  $counter = 0;
  $countDown = 10;

  while ($counter <= $maxNumber) {

    echo "<tr>
    <td>$counter</td>
    <td>$countDown</td>
    </tr>";
    $countDown =  $countDown - 1;
    $counter++;
  }
  ?>
&lt;/table>

</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->

<table>
<?php

$maxNumber = 10;
$counter = 0;
$countDown = 10;

while ($counter <= $maxNumber) {

  echo "<tr>
  <td>$counter</td>
  <td>$countDown</td>
  </tr>";
  $countDown =  $countDown - 1;
  $counter++;
}
?>
</table>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
