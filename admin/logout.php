<?php
  // session_destroy();
  // unset($_SESSION['admin']);
    if (isset($_SESSION["admin"])) {
	unset($_SESSION['admin']);
	session_destroy();
 	//$_SESSION["logout"] = "Logged out " ;						
    header("location: index.php");
    }
   header("location: index.php");
?>