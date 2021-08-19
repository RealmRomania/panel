<?php
include './db.php';
$stmt = $conn->prepare("SELECT * FROM panel"); $stmt->execute(); 

$panel = $stmt->fetchAll(); 

foreach($panel as $panel)  

?>

<?php
$stmt = $conn->prepare( 

    "SELECT * FROM users WHERE username='$login-username'"); 

$stmt->execute(); 


$users = $stmt->fetchAll(); 

foreach($users as $user)  

?>



<?php
$stmt = $conn->prepare( 

    "SELECT * FROM servere"); 

$stmt->execute(); 


$server = $stmt->fetchAll(); 

foreach($server as $server)  

?>

