<?php
session_start();
$_SESSION['csrfToken'] = bin2hex(random_bytes(32));
?>
<form method="post" action="process.php">
	<input type="text" name="input">
	<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>">
	<button type="submit">Submit</button>
</form>