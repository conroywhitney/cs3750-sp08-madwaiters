<?php
    session_start();

    require_once("template.php");
    require_once("sql.inc.php");

    if (!isset($_SESSION["items"])) { $_SESSION["items"] = array(); }

    // take incoming item id
    $pieces = explode("_", $_POST["id"]);
    $id = $pieces[1];

    $exists = false;
    // check to see if already in array
    foreach ($_SESSION["items"] as $item_id) {
        if ($item_id == $id) { 
            $exists = true;
        }
    }

    if (!$exists) {
        // stick in session to add to list of current ones if not dupe
        $_SESSION["items"][] = $id;
    }

    echo printFavorites();

?>
