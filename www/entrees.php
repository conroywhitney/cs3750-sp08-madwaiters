<?php require_once("header.php"); ?>

<?php

	$type = $_GET["type"];
	if ($type) {
		$query = "SELECT * FROM items WHERE type_id='$type' ";
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
	} else {

?>

	<!-- Show sampling of all -->

<?php

	}

?>

<?php require_once("footer.php"); ?>