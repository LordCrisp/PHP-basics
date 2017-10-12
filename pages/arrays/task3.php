
<?php
  $strPageTitle = "Arrays";
  $strTaskNr = "3";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Hvilke nøgler og værdier indeholder arrayet?</h4> <br>
  <h5 class="side2">3 af hver<h5>
    <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
   $kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
   foreach($kategorier as $key => $value) {
      echo "Key: ". $key . " Value: " . $value;
      echo "<br />";
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
   $kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
   foreach($kategorier as $key => $value) {
      echo "Key: ". $key . " Value: " . $value;
      echo "<br />";
   }
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
