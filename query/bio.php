<?php
include '../db.php';
include '../setari.php';
if(isset($_POST['submit'])) {

    $bio = $_POST['bioText'];
    $id = $_SESSION['id'];
    $sql = "UPDATE users SET About=:bioText, WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":bioText", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":id", $id, PDO::PARAM_STR);
    $stmt->execute();
}
?>