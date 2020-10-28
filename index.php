<?php
session_start();
if (isset($_SESSION['username'])) {
   q header("Location : home");
}
?>