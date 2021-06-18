<?php
    require_once("config.php");
    echo session_id();
    echo session_regenerate_id();
    echo "<br/>";
    echo session_save_path();
    echo "<br/>";
    echo session_status();
    
    echo "<br/>";
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "sessions are disabled.";
        break;
        case PHP_SESSION_NONE:
            echo "sessions are enabled, but none exists.";
        break;
        case PHP_SESSION_ACTIVE:
            echo "sessions are enabled, and one exists";
        break;
        default:
        echo "Error in session...";
    }

?>