
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "6";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Udskriv dit navn i en tabel, med hver bogstav er i én celle.
</h4> <br>
<h5>Lav cellerne skiftevis hvid skrift på sort baggrund og sort skrift på hvid baggrund.
Farven på body skal være lysblå.</h5><br>



<!-- ACTUAL CODE -->
<table>

<?php
$myName = "Steffen Pedersen";
$counter = 0;
$maxNumber = strlen($myName);

while ($counter < $maxNumber) {
  if ($counter % 2 == 0) {
    $tableColor = 'tableBlack';
}
  else {
    $tableColor = 'tableWhite';
  }
  echo "<td class=\"$tableColor\">";
  echo substr($myName, $counter, 1);
  echo "</td>";
  $counter++;
}
?>

</table>


<div class="side2"><br>
_____________________________________________________________________________<br>
__________________________________KODEN____________________________________<br>
_____________________________________________________________________________<br>
<br></div>
<!-- MOCK-CODE FOR SHOW -->
<h6>Inde i header.php</h6>
<pre> &lt;?php
  if($strTaskNr==6) {
    echo '&lt;body class="loops6">';}
  else {
    echo "&lt;body>";}
  ?>
</pre>

<h6>Inde i min sass fil</h6>
<pre>
  .loops6
    background-color: aqua
    color: black
    a
      color: black
    .tableBlack
      background-color: black
      color: $font--color
    .tableWhite
      background-color: $font--color
      color: black
</pre>

<h6>Inde i task6.php</h6>
<pre>
&lt;table>
  &lt;?php
  $myName = "Steffen Pedersen";
  $counter = 0;
  $maxNumber = strlen($myName);

  while ($counter < $maxNumber) {
    if ($counter % 2 == 0) {
      $tableColor = 'tableBlack';
  }
    else {
      $tableColor = 'tableWhite';
    }
    echo "&lt;td class=\"$tableColor\">";
    echo substr($myName, $counter, 1);
    echo "&lt;/td>";
    $counter++;
  }
  ?>
  &lt;/table>
</pre>


<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
