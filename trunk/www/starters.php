<?php require_once("header.php"); ?>

<?php

	$type = $_GET["type"];
	if ($type) {
		$query = "SELECT * FROM items WHERE type_id='$type' ";
		if ($result = mysql_query($query)) {
			if (mysql_num_rows($result) > 0) {
			    while ($row = mysql_fetch_assoc($result)) {
			        // print off its template
			        item_template($row);
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

	<h3>Recommended Starters</h3>

<?php

		$query = "SELECT * FROM items WHERE id='1' OR id='2' OR id='3' ";
		if ($result = mysql_query($query)) {
			if (mysql_num_rows($result) > 0) {
			    while ($row = mysql_fetch_assoc($result)) {
			        // print off its template
			        item_template($row);
			    }
			} else {
				echo "no rows";
			}
	    } else {
			echo "no result";
		}

	}

?>

<?php require_once("footer.php"); ?>
