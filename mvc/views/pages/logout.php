<?php
session_start();
unset($_SESSION['Id']);
unset($_SESSION['Email']);
header('Location:".BASE_URL."/login');
?>