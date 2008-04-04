<?php
    session_start();

    require_once("template.php");
    require_once("sql.inc.php");

    if (!isset($_SESSION["items"])) { $_SESSION["items"] = array(); }

    // take incoming item id
    $pieces = explode("_", $_POST["id"]);
    $id = $pieces[1];

    // if in array, remove it
    // don't care if not in array (error state, but who cares)
    for ($i = 0; $i < count($_SESSION["items"]); $i++) {
        if ($_SESSION["items"][$i] == $id) { 
            unset($_SESSION["items"][$i]);
        }
    }

    printFavorites();

?>
