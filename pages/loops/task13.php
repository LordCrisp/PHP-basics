
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "13";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Hvilke nøgler og værdier indeholder arrayet?</h4> <br>
  <h5 class="side2">3 af hver<h5>
    <br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;ul class="navigation">
&lt;?php
  for ($i=65; $i <=90 ; $i++) {
    $char = chr($i);

    echo "&lt;li>&lt;a href="#">$char&lt;/a>&lt;/li>";
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
<ul class="navigation">
<?php
  for ($i=65; $i <=90 ; $i++) {
    $char = chr($i);

    echo "<li><a href=\"#\">$char</a></li>";
    }
?>
</ul>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
