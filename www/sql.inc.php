<?php

    mysql_connect( "HOST", "USER", "PASSWORD" ) or
        die( "Could not connect to database: ".mysql_error() );

    mysql_select_db( "DATABASE" ) or
	    die( "Could not select database: ".mysql_error() );

?>
