<?php
    session_start();

    require_once("template.php");
    require_once("sql.inc.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>


  <title>script.aculo.us - web 2.0 javascript demos</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="css/script.css" media="screen" rel="Stylesheet" type="text/css">
  <script src="javascript/prototype.js" type="text/javascript"></script>
  <script src="javascript/effects.js" type="text/javascript"></script>
  <script src="javascript/dragdrop.js" type="text/javascript"></script>
  <script src="javascript/controls.js" type="text/javascript"></script>
  <style type="text/css">
    div.auto_complete {
      position:absolute;
      width:250px;
      background-color:white;
      border:1px solid #888;
      margin:0px;
      padding:0px;
    }
    ul.contacts  {
      list-style-type: none;
      margin:0px;
      padding:0px;
    }
    ul.contacts li.selected { background-color: #ffb; }
    li.contact {
      list-style-type: none;
      display:block;
      margin:0;
      padding:2px;
      height:32px;
    }
    li.contact div.image {
      float:left;
      width:32px;
      height:32px;
      margin-right:8px;
    }
    li.contact div.name {
      font-weight:bold;
      font-size:12px;
      line-height:1.2em;
    }
    li.contact div.email {
      font-size:10px;
      color:#888;
    }
    #list {
      margin:0;
      margin-top:10px;
      padding:0;
      list-style-type: none;
      width:250px;
    }
    #list li {
      margin:0;
      margin-bottom:4px;
      padding:5px;
      border:1px solid #888;
      cursor:move;
    }
  </style>
</head>

<body>

<div id="content">

    <h2>Your favourites:</h2>

    <div id="cart" class="cart">  
        <div id="items">
        <?php
            if ($_SESSION["items"]) {
                foreach ($_SESSION["items"] as $item_id) {
                    // find its info from the DB
                    if ($result = mysql_query("SELECT * FROM items WHERE id='$item_id'")) {
                        if ($row = mysql_fetch_assoc($result)) {
                            // print off its template
                            template($row);
                        }
                    }
                }
            }
        ?>
        </div>
    </div>

    <a href="logout.php">Clear Favourites</a>
    
    <div style="margin-top: 20px; height: 300px; width: 800px;">

        <!-- First Draggable Item -->
        <div class="products" id="product_65">
            <span>The Mushroom-Swiss Burger</span><br />
            <img style="position: relative;" alt="Mushroom-Swiss" id="product_65_img" src="images/mushroom.gif">
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("product_65", {revert:true})
            //]]>
        </script>

        <!-- Second Draggable Item -->
        <div class="products" id="product_66">
            <span>The Bacon Burger</span><br />
            <img style="position: relative;" alt="Bacon Burger" id="product_66_img" src="images/bacon.gif">
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("product_66", {revert:true})
            //]]>
        </script>

        <!-- Third Draggable Item (div) -->
        <div class="products" id="product_68">
            <span>The Oldetimer Burger</span><br />
            <img style="position: relative;" alt="Oldtimer" id="product_68_img" src="images/oldtimer.gif">
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Draggable("product_68", {revert:true})
            //]]>
        </script>

    </div><!-- End div margin-bottom -->
  
</div><!-- End content -->

<script type="text/javascript">
//<![CDATA[
Droppables.add("cart", {accept:'products', hoverclass:'cart-active', onDrop:function(element){new Ajax.Updater('items', 'add.php', {asynchronous:true, evalScripts:true, onComplete:function(request){Element.hide('indicator')}, onLoading:function(request){Element.show('indicator')}, parameters:'id=' + encodeURIComponent(element.id)})}})
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
Droppables.add("wastebin", {accept:'cart-items', hoverclass:'wastebin-active', onDrop:function(element){Element.hide(element); new Ajax.Updater('items', 'remove.php', {asynchronous:true, evalScripts:true, onComplete:function(request){Element.hide('indicator')}, onLoading:function(request){Element.show('indicator')}, parameters:'id=' + encodeURIComponent(element.id)})}})
//]]>
</script>
      
</body>
</html>
