<?php
session_start();
unset($_SESSION['Id']);
unset($_SESSION['Email']);
header('Location: http://125.234.104.133/web_php/gr06/login');
?>