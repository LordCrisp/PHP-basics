
<?php
  $strPageTitle = "Loops";
  $strTaskNr = "12";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Hvor mange og hvilke værdier kommer arrayet til at indeholde?</h4> <br>
  <h5 class="side2">Der kommer 5 værdier, og de har alle deres position +10 i værdi<h5><br>

<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $tal = array();
<span class="side2 comment">
  $i = 0 gør at $i variablen starter med en værdi på 0 <br>
  $i < 5 gør at loopet stopper inden det rammer 5 (5 gange, da det starter på 0)<br>
  $i++ gør at den ligger 1 til for hver loop den laver
</span>
  for ($i = 0; $i < 5; $i++)
  {
    <span class="side2 comment">
      $tal[] = $i + 10 laver en variabel som tager $i og smider en værdi på 10 oveni <br>
    </span>
    $tal[] = $i + 10;
  }

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
$tal = array();

for ($i = 0; $i < 5; $i++)
{
  $tal[] = $i + 10;
}

print_r($tal);
?>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
