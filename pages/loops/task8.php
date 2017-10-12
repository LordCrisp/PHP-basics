
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "8";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Lav et loop der udskriver tallene 1-7 under hinanden</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre>
&lt;ul>
  &lt;?php

  for ($i = 1; $i <= 10; $i++) {
  $cards[] = "&lt;img src=\"img/$i.gif\" class=\"cards\">";
  }

  $counter = 0;
  foreach ($cards as $key => $value) {

    $selectedCard = $cards[$counter];
    $counter = $counter + 1;
    echo "&lt;li>$selectedCard&lt;/li>";
  }

  ?>
&lt;/ul>
</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<ul>
<?php

for ($i = 1; $i <= 10; $i++) {
$cards[] = "<img src=\"img/$i.gif\" class=\"cards\">";
}

$counter = 0;
foreach ($cards as $key => $value) {

  $selectedCard = $cards[$counter];
  $counter = $counter + 1;
  echo "<li>$selectedCard</li>";
}

?>
</ul>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
