<?php

    function printFavorites() {
        if ($_SESSION["items"]) {
            foreach ($_SESSION["items"] as $item_id) {
                // find its info from the DB
                if ($result = mysql_query("SELECT * FROM items WHERE id='$item_id'")) {
                    if ($row = mysql_fetch_assoc($result)) {
                        // print off its template
                        cart_template($row);
                    }
                }
            }
        }
    }

?>

<?php

    function cart_template($row) {
        $id = $row["id"];
        $name = $row["name"];
        $image = $row["image"];
		$price = $row["price"];
?>
        <div class="cart-items" id="item_<?php echo $id; ?>" style="float: left;">
            <span style="font-weight: bold; color: #2153AA;"><?php echo $name; ?></span><br />
            <img style="position: relative;" alt="<?php echo $name; ?>" id="item_<?php echo $id; ?>_img" src="images/<?php echo $image; ?>">
			<?php if ($price): ?><span style="font-weight: bold; color: #2153AA;">$ <?php echo $price; ?></span><?php endif; ?>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("item_<?php echo $id; ?>", {revert:true})
            //]]>
        </script>
<?php
    }

    function item_template($row) {
        $id = $row["id"];
        $name = $row["name"];
        $image = $row["image"];
		$desc = $row["desc"];
		$price = $row["price"];
?>
        <div class="products" id="item_<?php echo $id; ?>">
            <span style="font-size: 12pt; color: #2153AA; font-weight: bold;"><?php echo $name; ?></span><br />
            <img style="position: relative;" alt="<?php echo $name; ?>" id="item_<?php echo $id; ?>_img" src="images/<?php echo $image; ?>">
			<span><?php echo $desc; ?></span><br />
			<?php if($price): ?><span><h4>$ <?php echo $price; ?></h4></span><?php endif; ?>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("item_<?php echo $id; ?>", {revert:true})
            //]]>
        </script>
<?php
    }

?>
