<?php 
session_destroy();
if($_SESSION['authenticated'] != 'JOPHESTUS') {
    header("Location: ./#");
	session_destroy();
   }
 ?>