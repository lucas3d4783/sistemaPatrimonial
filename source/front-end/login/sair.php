<?php
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>";
    echo "location.href = 'index.php'";
    echo "</script>";
?>