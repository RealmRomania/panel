<?php
$stmt = $conn->prepare( 

    "SELECT * FROM panel"); 

$stmt->execute(); 

$panel = $stmt->fetchAll(); 

foreach($panel as $panel)  

?>

<?php
$stmt = $conn->prepare( 

    "SELECT * FROM users"); 

$stmt->execute(); 


$users = $stmt->fetchAll(); 

foreach($users as $user)  



?>