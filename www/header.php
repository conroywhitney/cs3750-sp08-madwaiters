<?php
    session_start();

    require_once("template.php");
    require_once("sql.inc.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>

<!--
Design Copyright: Darren Hester 2006, http://www.designsbydarren.com
License: Released Under the "Creative Commons License", 
http://creativecommons.org/licenses/by-nc/2.5/
-->

  <title>cs3750 - Team MADWaiters</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="css/script.css" media="screen" rel="Stylesheet" type="text/css">
	<link href="css/news_style.css" type="text/css" rel="stylesheet" />
	<link href="css/dd_menu.css" type="text/css" rel="stylesheet" />
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

<div id="page_wrapper">

	<div id="header_wrapper">

		<div id="header">

		</div><!-- End header -->

		<?php require_once("dd_menu.php"); ?>

	</div><!-- End header_wrapper -->

<!--
	<div id="subheader_wrapper">
		<ul>
			<?php require_once("subtabs.php"); ?>
		</ul>
	</div>
-->

  <div id="content">

    <h2 style="margin-left: 20px;">Your favourites:</h2>

    <div id="cart" class="cart" style="float: left; margin-left: 20px; width: 740px; height: 200px;">  
        <div id="items">
            <?php printFavorites(); ?>
        </div>
    </div>

		<div style="float: left; height: 10px; margin: 5px; text-align: center; width: 740px;">
		    <a href="logout.php?next=<?php echo $_SERVER['REQUEST_URI']; ?>"><h4>[Clear Favourites]</h4></a>
		</div>

    <div id="wastebin" style="float: left; width: 740px; height: 30px; margin-left: 20px; margin-top: 5px; margin-bottom: 10px; ">
        Drag Items Here to <u>Remove</u> them From Your Favourites
    </div>

	<div style="clear: both;">&nbsp;</div>


	<div id="items" style="height: auto; margin-top: 15px; width: auto;">

<!-- End header -->
