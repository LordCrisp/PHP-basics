
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "20";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Hvor mange og hvilke værdier kommer arrayet til at indeholde?</h4> <br>
  <h5 class="side2">Der kommer 5 værdier, og de har alle deres position +10 i værdi<h5><br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  $countries = array (
    "DK" => "VIKINGER!",
    "UK" => "Snerpet Regnland",
    "DE" => "Sauerkraut",
    "US" => "Naivt Patriotland",
    "NG" => "Har $500.000 af dine penge... send dit kontonummer :)"
  );
  ?>

  &lt;select>
  &lt;?php
  foreach ($countries as $key => $value) {
      echo "&lt;option value=\"$key\">$value&lt;/option>";
  };
  ?>
  &lt;/select>

</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php

$countries = array (
  "DK" => "VIKINGER!",
  "UK" => "Snerpet Regnland",
  "DE" => "Sauerkraut",
  "US" => "Naivt Patriotland",
  "NG" => "Har $500.000 af dine penge... send dit kontonummer :)"
);

?>
<select>
<?php
foreach ($countries as $key => $value) {
    echo "<option value=\"$key\">$value</option>";
};

?>
</select>
<br>
<br>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
