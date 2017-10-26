
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
/*--------------------------------------------------------------------------
--------------------------USER NAVIGATION LIMITER---------------------------
--------------------------------------------------------------------------*/
session_start();


if(!empty($_GET['offset'])) {
  $_SESSION['x'] = $_SESSION['x'] + $_GET['offset'];
}
else {
  $_SESSION['x'] = 0;
}
$offset = $_SESSION['x'];


userTable($offset, 10, $userarray);



/* ------------------------------------------------------------------------
-------------------------USERDATA TABLE FUNCTION---------------------------
------------------------------------------------------------------------ */
function userTable($navSelect, $gridSize, $userDataArray){

/* ---------------------------ERROR TRACING--------------------------------
------------------------------------------------------------------------ */
if(gettype($userDataArray)!='array'){
  return false;
}

if(gettype($userDataArray[0])!='array'){
  return false;
}


/* -----------------------NAVIGATION VARIABLES----------------------------
------------------------------------------------------------------------ */
  $navCount = count($userDataArray);

if($navSelect < 0) {
  $navSelect = 0;
  $_SESSION = 0;
}

if ($navSelect + $gridSize > $navCount){
  $navSelect = $navCount - $gridSize;
  $_SESSION = $navCount - $gridSize;
}

// DYNAMIC BACK/FORWARD BUTTONS
echo '<ul class="userNav">';

  if($navSelect > 0) {
    echo '<li><a href="index.php?offset=-10">Forrige 10 Brugere</a></li>';
  }
  if($navSelect < $navCount - $gridSize) {
  echo '<li><a href="index.php?offset=10">Næste 10 Brugere</a></li>';
}

//USER TABLES
echo '</ul>
<table>
  <tr>
    <th>Username</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Account Type</th>
    <th>Type Icon</th>
  </tr>';

/* ----------USER DATA EXTRACTION & CREATION FROM NESTED ARRAYS------------
------------------------------------------------------------------------ */


for ($i = $navSelect; $i < $navSelect + $gridSize; $i++) {
  $userInfo = $userDataArray[$i];

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
    $myUserIcon = '<img src="img/guest.png">';
    break;
}

  echo "<tr>
          <td>$myUserName</td>
          <td>$myFullName</td>
          <td>$myEmail</td>
          <td>$myPassword</td>
          <td>$myUserType</td>
          <td>$myUserIcon</td>
        </tr>";
};

echo '</table>

<!-- DYNAMIC BACK/FORWARD BUTTONS -->
<ul class="userNav">';

  if($navSelect > 0) {
    echo '<li><a href="index.php?offset=-10">Forrige 10 Brugere</a></li>';
  }
  if($navSelect < $navCount - $gridSize) {
  echo '<li><a href="index.php?offset=10">Næste 10 Brugere</a></li>';
}
};

/* ---------------------------FUNCTION END-------------------------------
------------------------------------------------------------------------ */

?>
</ul>

<!-- FOOTER, SCRIPTS & BODY(end) -->
<?php require("incl/footer.php")?>
