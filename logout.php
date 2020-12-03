<?php
session_start();
// Destroying All Sessions
if(isset($_SESSION["username"]))
{
session_destroy();
header("Location: index.php");
}
?>
