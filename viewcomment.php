<?php

/* n: viewcomment.php
 * a: Joey Miller
 * d: View a comment from the database
 */

include "config.php";
include "functions.php";

$id         = htmlspecialchars($_GET['id']);
$connection = mysqli_connect($host, $user, $pass, $db);
$sql        = "SELECT * FROM comments WHERE id = $id";

if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL. " . mysqli_connect_error();
	die();
}

$comments = mysqli_query($connection, $sql);

if (!$comments) {
	die("Error: " . mysqli_error($connection));
}

$comment  = mysqli_fetch_array($comments);

pageHeader("View comment (ID #$id)");
echo "Comment ID #" . $id . ": " . $comment['date'] . " - " . $comment['name'] . " says: " . $comment['comment'] . " <a href=\"comments.php\">Back</a>";
pageFooter();

mysqli_close($connection);

?>
