<?php
if(isset($_POST["subject"]))
{
include("db.php");
$subject = mysqli_real_escape_string($con, $_POST["ssubject"]);
$comment = mysqli_real_escape_string($con, $_POST["text"]);
$query = "INSERT INTO notificari(subject, text) VALUES ('$subject', '$text')";
mysqli_query($con, $query);
}
?>