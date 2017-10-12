<!DOCTYPE html>

<html>
<?php
$strPageTitle = "Strings";
$strTaskNr = "9";
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
<h4>Antallet af ens karaktere der er brugt mellem de to tekster er:
  <?php echo similar_text($txt1,$txt2); ?> </h4> <br>

  <!-- MOCK-CODE FOR SHOW -->
    <pre>

      &lt;h4>Antallet af ens karaktere der er brugt mellem de to tekster er:
        &lt;?php echo similar_text($txt1,$txt2); ?> &lt;/h4> <br>

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
