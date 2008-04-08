<?php

    session_start();
    session_destroy();

	$next = $_GET["next"];

    header("Location: $next");

?>
