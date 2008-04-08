<?php require_once("header.php"); ?>

<?php 
	
	$bSearching = false;

	if (count($_GET) > 0) {

		$base_query = "SELECT t0.*, t1.name AS type ";
		$base_query .= "FROM items AS t0 ";
		$base_query .= "INNER JOIN item_types AS t1 ON ( t0.type_id = t1.id ) ";
		$base_query .= "WHERE ";

		// gotta start somewhere -- and we can check for $base_query at the end
		$QUERY = $base_query;

		// TYPE
		$type_query = null;
		if ($_GET["type"]) {
			foreach ($_GET["type"] as $type) {
				if ($type > -1) {
					$type_query .= "t0.type_id='$type' OR ";
				}
			}
		}
		$type_query = rtrim($type_query, "OR ");
		$type_query .= " AND ";
		$QUERY .= $type_query;

		// PRICE
		$price_query = null;
		if ($_GET["price"]) {
			foreach ($_GET["price"] as $price) {
				if ($price > -1) {
					switch ($price) {
						case 1: $price_query .= "(t0.price >= 9.00) OR "; break;
						case 2: $price_query .= "(t0.price >= 7.00 AND t0.price <= 8.99) OR "; break;
						case 3: $price_query .= "(t0.price >= 6.00 AND t0.price <= 6.99) OR "; break;
						case 4: $price_query .= "(t0.price >= 4.00 AND t0.price <= 5.99) OR "; break;
					}
				}
			}
		}
		$price_query = rtrim($price_query, "OR ");
		$price_query .= " AND ";
		$QUERY .= $price_query;

		// fix query before we run it
		$QUERY = rtrim($QUERY, "OR ");
		$QUERY = rtrim($QUERY, "AND ");
		$QUERY = rtrim($QUERY, $base_query);

		$bSearching = (strlen($QUERY) > 0) ? true : false;

		if ($bSearching) { 
			if (strlen(rtrim($price_query, " AND ")) > 0) { $QUERY .= ") "; }

			if ($result = mysql_query($QUERY)) {
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
				<h4><a href="search.php">Search Again &raquo;</a></h4>
			<?php

		} // end if ($bSearching)

	}

?>

<?php if (!$bSearching): ?>

	<form action="search.php" method="get">

<h3>Menu Section</h3>
<h4>Check boxes for sections of the menu you want to search, and we'll do the rest!</h4>
<ul>
	<li><input type="checkbox" id="type_all" name="type[]" value="-1" checked="true" onclick="return uncheckall('type_', 18);" /><label for="type_all">All Sections</label></li>
	<li><input type="checkbox" id="type_1" name="type[]" value="1" onclick="uncheck('type_all');" /><label for="type_1">Starters</label></li>
	<li><input type="checkbox" id="type_2" name="type[]" value="2" onclick="uncheck('type_all');" /><label for="type_2">Soups</label></li>
	<li><input type="checkbox" id="type_3" name="type[]" value="3" onclick="uncheck('type_all');" /><label for="type_3">Fire-Grilled Steaks</label></li>
	<li><input type="checkbox" id="type_5" name="type[]" value="5" onclick="uncheck('type_all');" /><label for="type_5">Kickin' Chicken</label></li>
	<li><input type="checkbox" id="type_6" name="type[]" value="6" onclick="uncheck('type_all');" /><label for="type_6">Guiltless Grill</label></li>
	<li><input type="checkbox" id="type_8" name="type[]" value="8" onclick="uncheck('type_all');" /><label for="type_8">Sizzling Fajitas</label></li>
	<li><input type="checkbox" id="type_9" name="type[]" value="9" onclick="uncheck('type_all');" /><label for="type_9">Savory Seafood</label></li>
	<li><input type="checkbox" id="type_10" name="type[]" value="10" onclick="uncheck('type_all');" /><label for="type_10">Big Mouth Burgers</label></li>
	<li><input type="checkbox" id="type_11" name="type[]" value="11" onclick="uncheck('type_all');" /><label for="type_11">Sandwiches</label></li>
	<li><input type="checkbox" id="type_12" name="type[]" value="12" onclick="uncheck('type_all');" /><label for="type_12">Desserts</label></li>
	<li><input type="checkbox" id="type_13" name="type[]" value="13" onclick="uncheck('type_all');" /><label for="type_13">Beverages</label></li>
	<li><input type="checkbox" id="type_14" name="type[]" value="14" onclick="uncheck('type_all');" /><label for="type_14">Salads</label></li>
	<li><input type="checkbox" id="type_15" name="type[]" value="15" onclick="uncheck('type_all');" /><label for="type_15">Sides</label></li>
	<li><input type="checkbox" id="type_16" name="type[]" value="16" onclick="uncheck('type_all');" /><label for="type_16">Mixed Drinks</label></li>
	<li><input type="checkbox" id="type_17" name="type[]" value="17" onclick="uncheck('type_all');" /><label for="type_17">Beers</label></li>
	<li><input type="checkbox" id="type_18" name="type[]" value="18" onclick="uncheck('type_all');" /><label for="type_18">Wines</label></li>
</ul>

<h3>Price</h3>
<h4>Give us a price range for the item you are looking for</h4>
<ul>
	<li><input type="checkbox" id="price_all" name="price[]" value="-1" checked="true" onclick="return uncheckall('price_', 4);" /><label for="price_all">All Prices</label></li>
	<li><input type="checkbox" id="price_1" name="price[]" value="1" onclick="uncheck('price_all');" /><label for="price_1">9.00+</label></li>
	<li><input type="checkbox" id="price_2" name="price[]" value="2" onclick="uncheck('price_all');" /><label for="price_2">7.00 - 8.99</label></li>
	<li><input type="checkbox" id="price_3" name="price[]" value="3" onclick="uncheck('price_all');" /><label for="price_3">6.00 - 6.99</label></li>
	<li><input type="checkbox" id="price_4" name="price[]" value="4" onclick="uncheck('price_all');" /><label for="price_4">4.00 - 5.99</label></li>
</ul>

		<input type="submit" value="Find Food!" />

	</form>

<script type="text/javascript">
	function uncheckall(id_prefix, count) {
		if (document.getElementById(id_prefix + "all").checked) {
			if (id_prefix + "all")
			for (var i = 1; i <= count; i++) {
				uncheck(id_prefix + i);
			}
		}
		return true;
	}

	function uncheck(id) {
		return document.getElementById(id).checked = false;
	}
</script>

<?php endif; ?>

<?php require_once("footer.php"); ?>
