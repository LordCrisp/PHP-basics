<!DOCTYPE html>

<html>
<?php
$strPageTitle = "Dag 2";
$strTaskNr = "7";
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

  <?php require("incl/header.php"); ?>

  <?php
  /* --------------------------------------------------------------------------
  ------------------------------EDIT VARIABLES---------------------------------
  ---------------------------------------------------------------------------*/

  $resName = "Bo Nicolajsen";
  $sendName = "Tina";
  $amount = "21.405,52 kr.";
  $donRes = "Dyrenes beskyttelse";
  $donName = "GeorgGiraf";
  $email = "bo@somewhere.dk";




  /* --------------------------------------------------------------------------
  ----------------------------------TEXTS--------------------------------------
  ---------------------------------------------------------------------------*/

  // FIRST TEXT
  $txt1 = "Til $resName<br>
  <br>
  Vi skriver fordi der endnu er penge på din konto og den er blevet spærret.<br> Grundet vi har skiftet platform bedes du oprette din konto på ny med email adressen: $email <br>Efter oprettelse vil dine penge vente på din konto hvor du enten kan bruge dem eller få dem udbetalt.<br>
  <br>
  <br>
  Beløb tilgængeligt opgjort pr. : $amount.<br>
  <br>
  venlig hilsen $sendName";


  // SECOND TEXT
  $txt2 = "Hej $sendName<br>
  <br>
  Da jeg er ufattelig rig, og derfor ikke har brug for pengene.<br> Ser jeg gerne at i
  donere alle pengene til $donRes beskyttelse. Under navnet \"$donName\".<br>
  <br>
  Venlig hilsen $resName";


  //$txt2 = str_replace("r", "fatt", "rig");
  $string = str_replace("rig", "fattig", $string);

  ?>

  <?php echo $txt1 ?>

  <br>
  _____________________________________________________________________________<br>
  _____________________________________________________________________________<br>
  _____________________________________________________________________________<br>
  <br>

  <?php echo $txt2 ?>




<!-- SCRIPTS -->
    <script src="content/js/jquery-3.1.1.min.js"></script>
    <script src="content/js/bootstrap.js"></script>
    <script src="https://cdn.rawgit.com/InventPartners/flex-responsive-burger-menu/master/js/nav.min.js"></script>
</body>
</html>
