
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "12";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Hvor mange og hvilke værdier kommer arrayet til at indeholde?</h4> <br>
  <h5 class="side2">Der kommer 5 værdier, og de har alle deres position +10 i værdi<h5><br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;table>
&lt;?php
for ($i=1; $i <= 7; $i++) {
  $day = "Sunday";

  if($i==1) {$day = 'Monday';}
  if($i==2) {$day = 'Tuesday';}
  if($i==3) {$day = 'Wednesday';}
  if($i==4) {$day = 'Thursday';}
  if($i==5) {$day = 'Friday';}
  if($i==6) {$day = 'Saturday';}

  switch (true) {
    case ($i <= "5"):
        $color = "blue";
      break;

    case ($i == "6"):
      $color = "yellow";
      break;

    default:
      $color = "red";
      break;
  }
  echo "&lt;tr style=\"color:$color\">
        &lt;td>$i&lt;/td>
        &lt;td>$day&lt;/td>
        &lt;/tr>";
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
for ($i=1; $i <= 7; $i++) {
  $day = "Sunday";

  if($i==1) {$day = 'Monday';}
  if($i==2) {$day = 'Tuesday';}
  if($i==3) {$day = 'Wednesday';}
  if($i==4) {$day = 'Thursday';}
  if($i==5) {$day = 'Friday';}
  if($i==6) {$day = 'Saturday';}

  switch (true) {
    case ($i <= "5"):
        $color = "blue";
      break;

    case ($i == "6"):
      $color = "yellow";
      break;

    default:
      $color = "red";
      break;
  }
  echo "<tr style=\"color:$color\">
        <td>$i</td>
        <td>$day</td>
        </tr>";
}

?>
</table>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
