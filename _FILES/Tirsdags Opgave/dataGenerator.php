
<?php
$nameArray=['Rikki Wardell','Grisel Boulware ',
'Yoshiko Morra','Rosemarie Egner','Colin Polinsky','Jake Lease','Fairy Tauber','Broderick Fils',
'Brigida Hazelrigg','Regan Brinkerhoff','Erika Cooney','Mitsue Sholes','Owen Trimarchi','Leonila Mcfarland','Brittny Mosquera','Brittani Laster','Filiberto Breeden','Claudio Straughan',
'Elicia Gourley','Angle Buckler','Margrett Schnieders','Ellena Homer','Georgeann Oiler','Erinn Clemmons','Sheldon Tumlin',
 'Arnetta Slaton','chloe Prude','Veola Rennie','Monty Boos','Monet Blanca','Suanne Zepeda','Cary Sugden','Aleshia Conlee',
  'Laquita Flake','rina Moreno','Delmy Verrill','Luanna Lees','Willetta Algarin','Hershel Dobbs','Germaine Ceniceros',
'Cinthia Levison','Jacqulyn Chinn','Daria Wu','Deshawn Seamon','Stepanie Wolter','Clemencia Hillen','Lila Ciulla','Terica Kolb',
'Kizzy Cothron','Myles Pieper'];

$userarray=[];

foreach ($nameArray as $user) {
    //generate username
    $arr = explode(' ',trim($user));
    $username=$arr[0];
    // random password
    $password= str_shuffle('123d45a678g9');
    
    $fullname=$user;
    
    $email=$username.'@somecorp.com';
    
    
    $typearray=['user','admin','guest'];
    $usertype=$typearray[rand(0, 2)];
    
    $userarray[]=["USERNAME"=>$username,"PASSWORD"=>$password,"FULL_NAME"=>$fullname,"EMAIL"=>$email,"USER_TYPE"=>$usertype];
    //echo "username: $username password: $password full name: $fullname Email: $email User type: $usertype<br>";
}
//print_r($userarray[2]);
 