
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "18";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Lav et array af spillekort, shuffle dem og træk de første 5</h4> <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php

  $cards[] = "&lt;img src=\"img/1.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/2.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/3.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/4.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/5.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/6.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/7.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/8.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/9.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/10.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/11.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/12.gif\" class=\"cards\">";
  $cards[] = "&lt;img src=\"img/13.gif\" class=\"cards\">";

  shuffle($cards);

  print_r($cards);


  for ($i = 0; $i < 5; $i++)
  {
    $selectedCard = $cards[$i];
    echo $selectedCard;
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

$cards[] = "<img src=\"img/1.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/2.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/3.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/4.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/5.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/6.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/7.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/8.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/9.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/10.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/11.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/12.gif\" class=\"cards\">";
$cards[] = "<img src=\"img/13.gif\" class=\"cards\">";

shuffle($cards);

print_r($cards);
echo "<br>";
echo "<br>";

for ($i = 0; $i < 5; $i++)
{
  $selectedCard = $cards[$i];
  echo $selectedCard;
}

?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
