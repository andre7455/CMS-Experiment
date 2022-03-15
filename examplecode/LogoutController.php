<?php
if (isset($_POST["logout"])) {
    session_unset();
    if (!isset($_SESSION["userEmail"])) {
        header("Location: index.php");
    } else {
        echo "wtf";
    }
}
?>