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

  <title>script.aculo.us - web 2.0 javascript demos</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="css/script.css" media="screen" rel="Stylesheet" type="text/css">
	<link href="css/news_style.css" type="text/css" rel="stylesheet" />
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

		<div id="navcontainer">
			<ul id="navlist">
			<li id="active"><a href="#" id="current">Item one</a></li>
			<li><a href="#">Item two</a></li>
			<li><a href="#">Item three</a></li>
			<li><a href="#">Item four</a></li>
			<li><a href="#">Item five</a></li>
			</ul>
		</div><!-- End navcontainer -->

	</div><!-- End header_wrapper -->

	<div id="left_side">

		<h3>Left Side</h3>

		<p>
		Lorem ipsum summo <a href="#">nominavi</a> pri et. Stet 
		<a href="#">eruditi</a> perfecto at sed, ad enim constituto 
		deseruisse quo, mea no quem eros munere. Ad splendide 
		quaerendum per, ea minimum officiis oportere vel, an has 
		perpetua percipitur. <a href="#">Consequat</a> contentiones 
		his te, id noster menandri his. Per partem perfecto eu, est 
		soluta accusata ex.
		</p>

		<h3>Left Side</h3>

		<div class='featurebox_side'>
		Lorem ipsum summo nominavi pri et. Stet eruditi perfecto at 
		sed, ad enim <a href="#">constituto</a> deseruisse quo, mea 
		no quem eros munere. 
		</div>

		<p>
		Lorem ipsum summo nominavi pri et. Stet eruditi perfecto at sed, 
		ad enim constituto deseruisse quo, mea no quem eros munere. Ad 
		splendide quaerendum per, <a href="#">ea minimum officiis</a> 
		oportere vel, an has perpetua percipitur. Consequat contentiones 
		his te, id <a href="#">noster menandri</a> his. Per partem perfecto 
		eu, est soluta accusata ex.
		</p>

		<div class='featurebox_side'>
		Lorem <a href="#">ipsum summo</a> nominavi pri et. Stet eruditi 
		perfecto at sed, ad enim constituto deseruisse quo, mea no quem 
		eros munere. 
		</div>

	</div><!-- End left_side -->

	<div id="right_side">

		<h3>Right Side</h3>

		<p>
		<a href="#">Lorem ipsum summo</a> nominavi pri et. Stet eruditi 
		perfecto at sed, ad enim constituto deseruisse quo, mea no quem 
		eros munere.
		</p>

		<div class='featurebox_side'>
		Lorem ipsum summo nominavi pri et. Stet eruditi perfecto at sed, 
		ad enim constituto deseruisse quo, mea no quem eros munere. 
		</div>

		<h4>Sub Title</h4>

		<p>
		Ad splendide <a href="#">quaerendum</a> per, ea minimum officiis 
		oportere vel, an has perpetua percipitur. Consequat contentiones 
		his te, id <a href="#">noster</a> menandri his. Per partem perfecto 
		eu, est soluta accusata ex.
		</p>

		<h3>Right Side</h3>

		<div class='featurebox_side'>
		<a href="#">Lorem ipsum</a> summo nominavi pri et. Stet eruditi 
		perfecto at sed, ad enim constituto deseruisse quo, mea no quem 
		eros munere. 
		</div>

		<p>
		Lorem ipsum summo nominavi pri et. Stet eruditi perfecto at sed, ad 
		enim constituto <a href="#">deseruisse</a> quo, mea no quem eros 
		munere. Ad splendide quaerendum per, ea minimum officiis oportere vel, 
		an has perpetua percipitur. Consequat contentiones his te, id noster 
		<a href="#">menandri</a> his. Per partem perfecto eu, est soluta 
		accusata ex.
		</p>

	</div><!-- End right_side -->

<div id="content">

    <h2>Your favourites:</h2>

    <div id="cart" class="cart" style="float: left;">  
        <div id="items">
            <?php printFavorites(); ?>
        </div>
    </div>

    <div id="wastebin" style="float: left; width: 160px; height: 160px; margin-left: 20px; margin-top: 0px; margin-bottom: 10px; ">
        Drag Items Here to <u>Remove</u> them From Your Favourites
    </div>

    <a href="logout.php">Clear Favourites</a>

<!-- End header -->
