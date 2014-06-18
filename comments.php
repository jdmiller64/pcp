<?php

/* n: comments.php
 * a: Joey Miller
 * d: Simple comment system
 */

include "config.php";
include "functions.php";

$connection = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL. " . mysqli_connect_error();
	die();
}

$comments = mysqli_query($connection, "SELECT * FROM comments");

pageHeader("Comments page");

?>
	<form method="post" action="addcomment.php">
		Name: <input type="text" name="name" /><br />
		Comment: <textarea name="comment" rows="5" cols="20"></textarea><br />
		<input type="submit" value="Post Comment" /> 
	</form>
	<hr />
<?php

while ($row = mysqli_fetch_array($comments)) {
	echo $row['date'] . " - " . $row['name'] . " says: " . $row['comment'] . " (<a href=\"viewcomment.php?id=" . $row['id'] . "\">View</a>)" . "\n";
	echo "<br />";
}

pageFooter();

mysqli_close($connection);

?>
