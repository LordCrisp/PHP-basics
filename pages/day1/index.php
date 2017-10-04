<!DOCTYPE html>

<html lang="da">
<!-- EXERCISE 4 1/2 (Variables as Title tag) See header.php for other half -->
<?php $strPageTitle = "Dag 1";
//require $_SERVER["DOCUMENT_ROOT"] . "/PHP-basics/pages/incl/header.php";
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <!-- NORMALIZE -->
    <link href="../../content/css/normalize.css" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM STYLESHEETS -->
    <link href="../../content/css/burgermenu.css" rel="stylesheet" />
    <link href="../../content/css/master.css" rel="stylesheet" />
    <link href="../../favicon.ico" rel="shortcut icon" >
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono|Titillium+Web" rel="stylesheet" media="bogus">


</head>
<!--BODY-->
<body>

  <?php include("incl/header.php");?>

  <h2>Øvelse 5 - Indsæt H1 tag via titel variablen & Øvelse 6 - Fil inkludering</h2>
  <pre> &lt;!-- EXERCISE 5 - Insert H1 tag with the Title variable --></pre>
  <h3>Taget fra header.php</h3>
  <pre> &lt;h1>&lt;?php echo $strPageTitle; ?>&lt;/h1> </pre>
<br>
<h3>Taget fra index.php</h3>
  <pre> &lt;!-- EXERCISE 6 - PHP File inclusion --></pre>
  <pre> &lt;?php require("incl/header.php"); ?> </pre>
</section>


_________________________________________________________________<br>
<section class="side2">
<!-- EXERCISE 6 - PHP File inclusion -->
  <?php require("incl/header.php"); ?>
</section>

  _________________________________________________________________<br>
  _________________________________________________________________<br>
  _________________________________________________________________<br>

  <section class="side1">
    <h2>Øvelse 4 - Titel på siden via en PHP variable</h2>
  <pre> &lt;!-- EXERCISE 4 1/2 (Variables as Title tag) See header.php for other half --></pre>
  <pre>&lt;?php $strPageTitle = "Dag 1";
  ?></pre>

  <h3>Taget fra header.php</h3>
  <pre> &lt;!-- EXERCISE 4 2/2 (Variables as Title tag) See index.php for other half --></pre>
  <pre>
  &lt;title>&lt;?php echo $strPageTitle ?>&lt;/title></pre>
</section>

_________________________________________________________________<br>
<section class="side2">
<h2>Se titlen på siden</h2></section>
_________________________________________________________________<br>
_________________________________________________________________<br>
_________________________________________________________________<br>
_________________________________________________________________<br>

<section class="side1">
  <h2>Øvelse 1 - Tekst via PHP</h2>
<pre> &lt;!-- EXERCISE 1 - Text via PHP --></pre>
<pre> &lt;?php /* Comment's can be written here */
echo
// And here (// removes only one line)
 "Hej Verden";
 # And like this... (# is the same as //)
?></pre>
</section>
_________________________________________________________________<br>
<section class="side2">
<!-- EXERCISE 1 - Text via PHP -->
<?php /* Comment's can be written here */
echo
// And here (// removes only one line)
 "Hej Verden";
 # And like this... (# is the same as //)
?></br>
</section>
_________________________________________________________________<br>
_________________________________________________________________<br>
_________________________________________________________________<br>
<section class="side1">
  <h2>Øvelse 2 - Tekst via PHP, INDEN i HTML</h2>
<pre> &lt;!-- EXERCISE 2 - Text via PHP, inside og HTML --></pre>
<pre> &lt;h1>&lt;?php echo "Hvad kan PHP?"; ?>&lt;/h1>
&lt;h2>&lt;?php echo "Her er en liste over nogle af de ting man kan med PHP:"; ?>&lt;/h2>
&lt;ul>
  &lt;li>&lt;?php echo "PHP kan generere dynamisk indhold på din webside"; ?>&lt;/li>
  &lt;li>&lt;?php echo "PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren"; ?>&lt;/li>
  &lt;li>&lt;?php echo "PHP kan modtage data fra en formular"; ?>&lt;/li>
  &lt;li>&lt;?php echo "PHP kan læse, tilføje, redigere og slette data i din database"; ?>&lt;/li>
  &lt;li>&lt;?php echo "PHP kan bruges til brugerkontrolleret adgang"; ?>&lt;/li>
&lt;/ul></pre>
</section>
_________________________________________________________________<br>
<section class="side2">
<!-- EXERCISE 2 - Text via PHP, inside og HTML -->
<h1><?php echo "Hvad kan PHP?"; ?></h1>
<h2><?php echo "Her er en liste over nogle af de ting man kan med PHP:"; ?></h2>
<ul>
  <li><?php echo "PHP kan generere dynamisk indhold på din webside"; ?></li>
  <li><?php echo "PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren"; ?></li>
  <li><?php echo "PHP kan modtage data fra en formular"; ?></li>
  <li><?php echo "PHP kan læse, tilføje, redigere og slette data i din database"; ?></li>
  <li><?php echo "PHP kan bruges til brugerkontrolleret adgang"; ?></li>
</ul>
</section>

_________________________________________________________________<br>
_________________________________________________________________<br>
_________________________________________________________________<br>
<section class="side1">
  <h2>Øvelse 3 - HTML Tags via PHP (Med brug af ")</h2>
<pre> &lt;!-- EXERCISE 3 - HTML tags written inside PHP with " ---- \ is needed in front of every " inside the string --></pre>
<pre> &lt;?php echo "
&lt;h1 class=\"text-primary\">PHP's Historie&lt;/h1>
&lt;div class=\"container\">
&lt;div class=\"row\">
  &lt;div class=\"col-md-6\">
    &lt;p>Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995&lt;/p>
    &lt;p>Startede som et lille, simpelt CGI script i Perl til trafik overvågning&lt;/p>
    &lt;p>PHP står for Hypertext Preprocessor&lt;/p>
  &lt;/div>
  &lt;div class=\"col-md-6\">
    &lt;p>open source, objekt-orienteret server-side programmeringssprog&lt;/p>
    &lt;p>ideel til udvikling af dynamiske webapplikationer&lt;/p>
    &lt;p>Afvikles på webserver software som Apache eller IIS&lt;/p>
  &lt;/div>
&lt;/div>
&lt;/div>
";
?></pre>
</section>
_________________________________________________________________<br>
<section class="side2">
<!-- EXERCISE 3 - HTML tags written inside PHP with " ---- \ is needed in front of every " inside the string-->
<?php echo "
<h1 class=\"text-primary\">PHP's Historie</h1>
<div class=\"container\">
<div class=\"row\">
  <div class=\"col-md-6\">
    <p>Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995</p>
    <p>Startede som et lille, simpelt CGI script i Perl til trafik overvågning</p>
    <p>PHP står for Hypertext Preprocessor</p>
  </div>
  <div class=\"col-md-6\">
    <p>open source, objekt-orienteret server-side programmeringssprog</p>
    <p>ideel til udvikling af dynamiske webapplikationer</p>
    <p>Afvikles på webserver software som Apache eller IIS</p>
  </div>
</div>
</div>
";
?>
</section>

_________________________________________________________________<br>
_________________________________________________________________<br>
_________________________________________________________________<br>
<section class="side1">
  <h2>Øvelse 3 IGEN - HTML Tags via PHP (Med brug af ')</h2>
<pre> &lt;!-- EXERCISE 3 AGAIN (Using a different symbol) --></pre>
<pre> &lt;!-- HTML tags written inside PHP with ' instead of " ---- \ only needed before ' instead of every " here --> </pre>
<pre> &lt;?php echo '
  &lt;h1 class="text-primary">PHP\'s Historie&lt;/h1>
&lt;div class="container">
  &lt;div class="row">
    &lt;div class="col-md-6">
      &lt;p>Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995&lt;/p>
      &lt;p>Startede som et lille, simpelt CGI script i Perl til trafik overvågning&lt;/p>
      &lt;p>PHP står for Hypertext Preprocessor&lt;/p>
    &lt;/div>
    &lt;div class="col-md-6">
      &lt;p>open source, objekt-orienteret server-side programmeringssprog&lt;/p>
      &lt;p>ideel til udvikling af dynamiske webapplikationer&lt;/p>
      &lt;p>Afvikles på webserver software som Apache eller IIS&lt;/p>
    &lt;/div>
  &lt;/div>
&lt;/div>
';
?></pre>
</section>
_________________________________________________________________<br>
<section class="side2">
<!-- EXERCISE 3 AGAIN (Using a different symbol) -->
<!-- HTML tags written inside PHP with ' instead of " ---- \ only needed before ' instead of every " here -->
<?php echo '
  <h1 class="text-primary">PHP\'s Historie</h1>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <p>Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995</p>
      <p>Startede som et lille, simpelt CGI script i Perl til trafik overvågning</p>
      <p>PHP står for Hypertext Preprocessor</p>
    </div>
    <div class="col-md-6">
      <p>open source, objekt-orienteret server-side programmeringssprog</p>
      <p>ideel til udvikling af dynamiske webapplikationer</p>
      <p>Afvikles på webserver software som Apache eller IIS</p>
    </div>
  </div>
</div>
';
?>
</section>



<!--  FONT LOADING HACK -->
<link href="https://fonts.googleapis.com/css?family=Space+Mono|Titillium+Web" rel="stylesheet">
<!-- SCRIPTS -->
    <!-- Jquery -->
    <script src="content/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap script -->
    <script src="content/js/bootstrap.js"></script>
    <script src="https://cdn.rawgit.com/InventPartners/flex-responsive-burger-menu/master/js/nav.min.js"></script>
</body>
</html>
