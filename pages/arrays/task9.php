
<?php
  $strPageTitle = "Arrays";
  $strTaskNr = "9";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php");

/* RANDOM NUMBER ARRAY GENERATOR */
for ($i = 0; $i < 50; $i++)
{
  $randomNr[] = rand(0, 9);
};
?>


  <h4>Lav et array med 50 forskellige tal mellem 0-9, og udskriv derefter hvor mange af hver tal der er i array'et</h4> <br>

<h5 class="side2">Tallet i [] er værdien, og tallet uden for er hvor mange der er af dem</h5>
<?php
/* ARRAY VALUE COUNTER */
print_r(array_count_values($randomNr));
?>

<br>
<br>
<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  /* RANDOM NUMBER ARRAY GENERATOR */
  for ($i = 0; $i < 50; $i++)
  {
    $randomNr[] = rand(0, 9);
  };

  print_r($randomNr);


  /* ARRAY VALUE COUNTER */
  print_r(array_count_values($randomNr));

  ?>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php

print_r($randomNr);
?>
<br>
<br>

<h4 class="side2">Tallet i [] er værdien, og tallet uden for er hvor mange der er af dem</h4>
<?php
/* ARRAY VALUE COUNTER */
print_r(array_count_values($randomNr));

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
