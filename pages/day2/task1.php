<!DOCTYPE html>

<html>
<?php
$strPageTitle = "Strings";
$strTaskNr = "1";
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

  <!-- HEADER -->
<?php require("incl/header.php"); ?>
<h4>Indsæt variabler på navne, beløb og modtager, så de kan ændres dynamisk</h4> <br>
  <!-- MOCK-CODE FOR SHOW -->


    <h5>Nyt indhold i variables.php</h5>
    <pre>
      &lt;?php
      /* --------------------------------------------------------------------------
      ------------------------------EDIT VARIABLES---------------------------------
      ---------------------------------------------------------------------------*/

      $resName = "Bo";
      $resLastName = "Nicolajsen";
      $sendName = "Tina";
      $amount = "21.405,52 kr.";
      $donRes = "Dyrenes beskyttelse";
      $donName = "GeorgGiraf";

      /* --------------------------------------------------------------------------
      ----------------------------------TEXTS--------------------------------------
      ---------------------------------------------------------------------------*/

      // FIRST TEXT
      $txt1 = "Til $resName $resLastName&lt;br>
      &lt;br>
      Vi skriver fordi der endnu er penge på din konto og den er blevet spærret.<br> Grundet vi har skiftet platform bedes du oprette din konto på ny med email adressen: bo@somewhere.dk <br>Efter oprettelse vil dine penge vente på din konto hvor du enten kan bruge dem eller få dem udbetalt.<br>
      &lt;br>
      &lt;br>
      Beløb tilgængeligt opgjort pr. : $amount.&lt;br>
      &lt;br>
      venlig hilsen $sendName";


      // SECOND TEXT
      $txt2 = "Hej $sendName&lt;br>
      &lt;br>
      Da jeg er ufattelig rig, og derfor ikke har brug for pengene.<br> Ser jeg gerne at i
      donere alle pengene til $donRes beskyttelse. Under navnet \"$donName\".&lt;br>
      &lt;br>
      Venlig hilsen $resName";

      ?>
    </pre>
    
  <div class="side2"><br>
  _____________________________________________________________________________<br>
  _________________________________RESULTAT___________________________________<br>
  _____________________________________________________________________________<br>
  <br></div>


  <!-- ACTUAL CODE -->
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
    <script src="https://cdn.jsdelivr.net/gh/InventPartners/flex-responsive-burger-menu/js/nav.min.js"></script>
</body>
</html>
