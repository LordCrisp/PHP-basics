<?php
  /*session_start();
  $SESSION["userName"] = "Bamse";
  $SESSION["userTracking"] = "$strPageTitle $strTaskNr";*/
  require("variables.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php echo $strPageTitle ?></title>
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
<header>

  <nav>
    <a href="../../index.php"><img src="../../content/images/back.svg" alt="tilbage-til-forsiden" class="backsie">
    <p>TILBAGE TIL FORSIDEN</p></a>

    <ul>
      <li><a href="index.php">Array Opgave 1</a></li>
      <li><a href="task2.php">Array Opgave 2</a></li>
      <li><a href="task3.php">Array Opgave 3</a></li>
      <li><a href="task4.php">Array Opgave 4</a></li>
      <li><a href="task5.php">Array Opgave 5</a></li>
      <li><a href="task6.php">Array Opgave 6</a></li>
      <li><a href="task7.php">Array Opgave 7</a></li>
      <li><a href="task8.php">Array Opgave 8</a></li>
      <li><a href="task9.php">Array Opgave 9</a></li>
      <li><a href="task10.php">Array Opgave 10</a></li>
      <li><a href="task11.php">Array Opgave 11</a></li>
      <li><a href="task12.php">Array Opgave 12</a></li>
    </ul>
  </nav>

  <h1><?php echo $strPageTitle; ?></h1>
  <h2>Opgave <?php echo $strTaskNr; ?></h2><br>

</header>
