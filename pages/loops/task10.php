
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "10";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Udvid opgave 9 og indsæt dag-navne</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre>
  &lt;?php
  for ($i=1; $i <= 7; $i++) {
    $day = "Sunday";

    if($i==1) {$day = 'Monday';}
    if($i==2) {$day = 'Tuesday';}
    if($i==3) {$day = 'Wednesday';}
    if($i==4) {$day = 'Thursday';}
    if($i==5) {$day = 'Friday';}
    if($i==6) {$day = 'Saturday';}
    echo "$i $day<br>";
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
  $day = "Sunday";

  if($i==1) {$day = 'Monday';}
  if($i==2) {$day = 'Tuesday';}
  if($i==3) {$day = 'Wednesday';}
  if($i==4) {$day = 'Thursday';}
  if($i==5) {$day = 'Friday';}
  if($i==6) {$day = 'Saturday';}
  echo "$i $day<br>";
}

?>


<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
