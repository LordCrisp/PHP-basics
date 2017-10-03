<!DOCTYPE html>

<html>
<?php $strPageTitle = "Forside";
//require $_SERVER["DOCUMENT_ROOT"] . "/PHP-basics/pages/incl/header.php";
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta charset="utf-8"/> -->
    <link href="content/css/normalize.css" rel="stylesheet" />
    <link href="content/css/bootstrap.css" rel="stylesheet" />
    <link href="content/css/burgermenu.css" rel="stylesheet" />
    <link href="content/css/main.css" rel="stylesheet" />
    <link href="./favicon.ico" rel="shortcut icon" >


</head>
<!--BODY-->
<body>

  <?php require("pages/incl/header.php"); ?>

<!-- Text via PHP -->
<?php /* Comment's can be written here */
echo
// And here (// removes only one line)
 "Hej Verden";
 # And like this... (# is the same as //)
?>


<!-- Text via PHP, inside og HTML -->
<h1><?php echo "Hvad kan PHP?"; ?></h1>
<h2><?php echo "Her er en liste over nogle af de ting man kan med PHP:"; ?></h2>
<ul>
  <li><?php echo "PHP kan generere dynamisk indhold på din webside"; ?></li>
  <li><?php echo "PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren"; ?></li>
  <li><?php echo "PHP kan modtage data fra en formular"; ?></li>
  <li><?php echo "PHP kan læse, tilføje, redigere og slette data i din database"; ?></li>
  <li><?php echo "PHP kan bruges til brugerkontrolleret adgang"; ?></li>
</ul>



<!-- HTML tags written inside PHP with " ---- \ is needed in front of every " inside the string -->
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





<!-- SCRIPTS -->
    <script src="content/js/jquery-3.1.1.min.js"></script>
    <script src="content/js/bootstrap.js"></script>
    <script src="https://cdn.rawgit.com/InventPartners/flex-responsive-burger-menu/master/js/nav.min.js"></script>
</body>
</html>
