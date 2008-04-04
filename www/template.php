<?php

    function template($row) {
        $id = $row["id"];
        $name = $row["name"];
        $image = $row["image"];
?>
        <!-- First Draggable Item -->
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

?>
