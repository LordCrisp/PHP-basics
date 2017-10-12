  <?php
    $strPageTitle = "Loops";
    $strTaskNr = "11";
    ?>

    <!-- HEAD, HEADER & BODY (start) -->
  <?php require("incl/header.php"); ?>


    <h4>Byg videre og giv Man-Fre blå farve, Lør gul farve og Søn rød farve</h4> <br>

  <!-- MOCK-CODE FOR SHOW -->

  <pre>
    &lt;?php
    for ($i=1; $i <= 7; $i++) {
      $day = "Sunday";

      if($i==1) {$day = 'Monday';}
      if($i==2) {$day = 'Tuesday';}
      if($i==3) {$day = 'Wednesday';}
      if($i==4) {$day = 'Thursday';}
      if($i==5) {$day = 'Friday';}
      if($i==6) {$day = 'Saturday';}

      switch (true) {
        case ($i <= "5"):
            $day =  "&lt;span style=\"color:blue;\">$i $day &lt;span>";
          break;

        case ($i == "6"):
          $day = "&lt;span style=\"color:yellow;\">$i $day &lt;span>";
          break;

        default:
          $day = "&lt;span style=\"color:red;\">$i $day &lt;span>";
          break;
      }
      echo "$day&lt;br>";
    }
    ?>
  </pre>


  <div class="side2"><br>
  _____________________________________________________________________________<br>
  _________________________________RESULTAT___________________________________<br>
  _____________________________________________________________________________<br>
  <br></div>

  <!-- ACTUAL CODE -->

  <?php
  for ($i=1; $i <= 7; $i++) {
    $day = "Sunday";

    if($i==1) {$day = 'Monday';}
    if($i==2) {$day = 'Tuesday';}
    if($i==3) {$day = 'Wednesday';}
    if($i==4) {$day = 'Thursday';}
    if($i==5) {$day = 'Friday';}
    if($i==6) {$day = 'Saturday';}

    switch (true) {
      case ($i <= "5"):
          $day =  "<span style=\"color:blue;\">$i $day <span>";
        break;

      case ($i == "6"):
        $day = "<span style=\"color:yellow;\">$i $day <span>";
        break;

      default:
        $day = "<span style=\"color:red;\">$i $day <span>";
        break;
    }
    echo "$day<br>";
  }

  ?>


  <!-- FOOTER, SCRIPTS & BODY(end) -->
  <?php require("incl/footer.php")?>
