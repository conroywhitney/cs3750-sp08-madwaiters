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
?>
        <div class="cart-items" id="item_<?php echo $id; ?>" style="float: left;">
            <span><?php echo $name; ?></span><br />
            <img style="position: relative;" alt="<?php echo $name; ?>" id="item_<?php echo $id; ?>_img" src="images/<?php echo $image; ?>">
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
?>
        <div class="products" id="item_<?php echo $id; ?>">
            <span><?php echo $name; ?></span><br />
            <img style="position: relative;" alt="<?php echo $name; ?>" id="item_<?php echo $id; ?>_img" src="images/<?php echo $image; ?>">
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("item_<?php echo $id; ?>", {revert:true})
            //]]>
        </script>
<?php
    }

?>
