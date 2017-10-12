
<?php
  $strPageTitle = "Arrays";
  $strTaskNr = "1";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Find ud af positionen på navnene i mit array</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $navne[] = "Per";
  $navne[] = "Hans";
  $navne[] = "Brian";
  $navne[] = "Gitte";

  print_r($navne);
  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
$navne[] = "Per";
$navne[] = "Hans";
$navne[] = "Brian";
$navne[] = "Gitte";

print_r($navne);
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
