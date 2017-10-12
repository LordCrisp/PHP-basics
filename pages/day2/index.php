<!DOCTYPE html>

<html>
<?php
$strPageTitle = "Strings";
$strTaskNr = "Start";
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
  <h4>Opstart af siden, der skal arbejdes ud fra</h4> <br>

  <!-- MOCK-CODE FOR SHOW -->

  <h5>Indhold på selve siden</h5>
  <pre>
    &lt;?php require("incl/header.php"); ?>

    &lt;?php echo $txt1 ?>

    &lt;br>

    &lt;?php echo $txt2 ?>
  </pre>

  <h5>Indhold i header.php</h5>
  <pre>
    &lt;title>&lt;?php echo $strPageTitle ?>&lt;/title>

    &lt;?php include("variables.php"); ?>

    &lt;header>

      &lt;nav>
        &lt;a href="../../index.php">&lt;img src="../../content/images/back.svg" alt="tilbage-til-forsiden" class="backsie">
        &lt;p>TILBAGE TIL FORSIDEN&lt;/p>&lt;/a>

        &lt;ul>
          &lt;li>&lt;a href="index.php">String Opgave Start&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task1.php">String Opgave 1&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task2.php">String Opgave 2&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task3.php">String Opgave 3&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task4.php">String Opgave 4&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task5.php">String Opgave 5&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task6.php">String Opgave 6&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task7.php">String Opgave 7&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task8.php">String Opgave 8&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task9.php">String Opgave 9&lt;/a>&lt;/li>
          &lt;li>&lt;a href="task10.php">String Opgave 10&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/nav>

      &lt;h1>&lt;?php echo $strPageTitle; ?>&lt;/h1>
      &lt;h2>Opgave &lt;?php echo $strTaskNr; ?>&lt;/h2>

    &lt;/header>
  </pre>

  <h5>Indhold i variables.php</h5>
  <pre>
    &lt;?php
    /* --------------------------------------------------------------------------
    ----------------------------------TEXTS--------------------------------------
    ---------------------------------------------------------------------------*/

    // FIRST TEXT
    $txt1 = "Til Bo Nicolajsen&lt;br>
    &lt;br>
    Vi skriver fordi der endnu er penge på din konto og den er blevet spærret.<br> Grundet vi har skiftet platform bedes du oprette din konto på ny med email adressen: bo@somewhere.dk <br>Efter oprettelse vil dine penge vente på din konto hvor du enten kan bruge dem eller få dem udbetalt.<br>
    &lt;br>
    &lt;br>
    Beløb tilgængeligt opgjort pr. : 21.405,52 kr.&lt;br>
    &lt;br>
    venlig hilsen Tina";


    // SECOND TEXT
    $txt2 = "Hej Tina&lt;br>
    &lt;br>
    Da jeg er ufattelig rig, og derfor ikke har brug for pengene.<br> Ser jeg gerne at i
    donere alle pengene til Dyrenes beskyttelse. Under navnet \"GeorgGiraf\".&lt;br>
    &lt;br>
    Venlig hilsen Bo";

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
    <script src="https://cdn.rawgit.com/InventPartners/flex-responsive-burger-menu/master/js/nav.min.js"></script>
</body>
</html>
