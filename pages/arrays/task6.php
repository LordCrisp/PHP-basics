
<?php
  $strPageTitle = "Arrays";
  $strTaskNr = "6";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Google hvordan man bruger sort funktionen. Kopier arrays fra opgave 1 & 2 og brug print_r før og efter sortering af begge</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  /* FIRST ARRAY */
  $navne[] = "Per";
  $navne[] = "Hans";
  $navne[] = "Brian";
  $navne[] = "Gitte";

  print_r($navne);

  sort($navne);
  foreach ($navne as $key => $val) {}

  print_r($navne);


  /* SECOND ARRAY */
  $tal = array();

  for ($i = 0; $i < 5; $i++)
  {
    $tal[] = $i + 10;
  }

  print_r($tal);

  sort($tal);
  foreach ($tal as $key => $val) {}

  print_r($tal);

  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php

/* FIRST ARRAY */
$navne[] = "Per";
$navne[] = "Hans";
$navne[] = "Brian";
$navne[] = "Gitte";

print_r($navne);
echo "<br>";
echo "<br>";

sort($navne);
foreach ($navne as $key => $val) {}

print_r($navne);


echo "<br>";

/* SECOND ARRAY */
$tal = array();

for ($i = 0; $i < 5; $i++)
{
  $tal[] = $i + 10;
}
echo "<br>";
print_r($tal);
echo "<br>";

sort($tal);
foreach ($tal as $key => $val) {}
echo "<br>";
echo "<br>";
print_r($tal);

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
