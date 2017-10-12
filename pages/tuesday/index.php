
<?php
  $strPageTitle = "Tirsdags Opgave";
  $strTaskNr = "Om Brugervisning";

  ?>

  <!-- HEAD, HEADER & BODY (start) -->
<?php require("incl/header.php"); ?>


  <h4>10 Bruger Tabel med info ikoner</h4> <br>
  <h5>Tabellen skal vise 10 brugere af gangen<h5><br>

<!-- ACTUAL CODE -->
<?php
/* USER NAVIGATION LIMITER */
session_start();


if(!empty($_GET['offset'])) {
  $_SESSION['x'] = $_SESSION['x'] + $_GET['offset'];
}
else {
  $_SESSION['x'] = 0;
}

/* NAVIGATION VARIABLES */
  $navSelect = $_SESSION['x'];
  $navCount = count($userarray);




print_r($navSelect);
echo "<br>";
print_r($navCount);
?>

<!-- DYNAMIC BACK/FORWARD BUTTONS -->
<ul class="userNav">
  <?php
  if($navSelect > 0) {
    echo '<li><a href="index.php?offset=-10">Forrige 10 Brugere</a></li>';
  }
  if($navSelect < $navCount - 10) {
  echo '<li><a href="index.php?offset=10">Næste 10 Brugere</a></li>';
}?>
</ul>


<!-- USER TABLES -->
<table>
  <tr>
    <th>Username</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Account Type</th>
    <th>Type Icon</th>
  </tr>

<?php
/* USER DATA EXTRACTION & CREATION FROM NESTED ARRAYS */
for ($i = $navSelect; $i < $navSelect + 10; $i++) {
  $userInfo = $userarray[$i];

  $myUserName = $userInfo['USERNAME'];
  $myFullName = $userInfo['FULL_NAME'];
  $myEmail = $userInfo['EMAIL'];
  $myPassword = $userInfo['PASSWORD'];
  $myUserType = $userInfo['USER_TYPE'];


/* ICON SELECTION SWITCH */
switch ($myUserType) {
  case 'user':
    $myUserIcon = '<img src="img/user.png">';
    break;

  case 'admin':
    $myUserIcon = '<img src="img/admin.png">';
    break;

  default:
    $myUserIcon = '<img src="img/guest.jpg">';
    break;
}


/* ALTERNATIVE ICON SELECTION */
  /*  $myUserIcon = '<img src="img/guest.jpg">';

  if ($myUserType == "admin") {
    $myUserIcon = '<img src="img/admin.png">';
  }
  if ($myUserType == "user") {
    $myUserIcon = '<img src="img/user.png">';
  }*/

  echo "<tr>
          <td>$myUserName</td>
          <td>$myFullName</td>
          <td>$myEmail</td>
          <td>$myPassword</td>
          <td>$myUserType</td>
          <td>$myUserIcon</td>
        </tr>";
};
?>


</table>

<!-- DYNAMIC BACK/FORWARD BUTTONS -->
<ul class="userNav">
  <?php
  if($navSelect > 0) {
    echo '<li><a href="index.php?offset=-10">Forrige 10 Brugere</a></li>';
  }
  if($navSelect < $navCount - 10) {
  echo '<li><a href="index.php?offset=10">Næste 10 Brugere</a></li>';
}?>
</ul>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
