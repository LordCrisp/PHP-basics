
<?php
  $strPageTitle = "Arrays";
  $strTaskNr = "11";
  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>Lav array med 5 menupunkter. Udskriv dem derefter i en ul - li</h4> <br>


<!-- MOCK-CODE FOR SHOW -->

<pre> &lt;?php
  $menus[] = "Home";
  $menus[] = "Products";
  $menus[] = "About Us";
  $menus[] = "Contact";
  $menus[] = "Social Media";
  ?>

  &lt;ul class="navigation">
  &lt;?php
  foreach ($menus as $value) {
      echo "&lt;li>$value&lt;/li>";
  };
  ?>
  &lt;/ul>

</pre>


<div class="side2"><br>
_____________________________________________________________________________<br>
_________________________________RESULTAT___________________________________<br>
_____________________________________________________________________________<br>
<br></div>

<!-- ACTUAL CODE -->
<?php
$menus[] = "Home";
$menus[] = "Products";
$menus[] = "About Us";
$menus[] = "Contact";
$menus[] = "Social Media";
?>

<ul class="navigation">
<?php
foreach ($menus as $value) {
    echo "<li>$value</li>";
};
?>
</ul>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
