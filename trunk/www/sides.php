<?php require_once("header.php"); ?>

<?php

	$query = "SELECT * FROM items WHERE type_id='15' ";
	if ($result = mysql_query($query)) {
		if (mysql_num_rows($result) > 0) {
		    while ($row = mysql_fetch_assoc($result)) {
		        // print off its template
		        echo item_template($row);
		    }
		} else {
			echo "no rows";
		}
    } else {
		echo "no result";
	}

?>

<?php require_once("footer.php"); ?>
