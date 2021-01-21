<?php
session_start();
if (isset($_POST['csrfToken'])) {
	if ($_SESSION['csrfToken'] == $_POST['csrfToken']) { # Validation
		echo htmlspecialchars($_POST['input']);
		session_destroy(); # session automatically deleted if signed in successfully
	}else{
		echo "Error csrf token";
	}
}
?>