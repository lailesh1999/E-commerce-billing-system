<?php

include_once("./database/constants.php");
if (isset($_SESSION["admin_id"])) {
	session_destroy();
}
header("location:login.php");

?>