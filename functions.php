<?php

/* n: functions.php
 * a: Joey Miller
 * d: Miscellaneous functions
 */

# Provides necessary header for an HTML page
function pageHeader($title) {
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n",
	     "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n",
		 "<head>\n",
		 "    <title>" . $title . "</title>\n",
		 "</head>\n",
		 "<body>\n",
		 "    <div>";
}

# Provides necessary footer for an HTML page
function pageFooter() {
	echo "</div>\n",
	     "</body>\n",
		 "</html>";
}

?>
