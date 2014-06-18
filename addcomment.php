<?php

/* n: addcomment.php
 * a: Joey Miller
 * d: Adds a comment to the database
 */

include "config.php";
include "functions.php";

$connection = mysqli_connect($host, $user, $pass, $db);
$comment    = mysqli_real_escape_string($connection, $_POST["comment"]);
$name       = mysqli_real_escape_string($connection, $_POST["name"]);
$date       = date("l, m.d.Y h:i:s a");

if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL. " . mysqli_connect_error();
	die();
}

$sql = "INSERT INTO comments (name, date, comment)
VALUES ('$name', '$date', '$comment')";

if (strlen($name) < 1 or strlen($comment) < 1) {
	die("Please fill in all of the fields. <a href=\"comments.php\">Back</a>");
}

if (!mysqli_query($connection, $sql)) {
	die("Error: " . mysqli_error($connection));
}

pageHeader("Add comment");
echo "Comment added successfully! <a href=\"comments.php\">Back</a>";
pageFooter();

mysqli_close($connection);

?>
