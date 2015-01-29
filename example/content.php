<?php if(isset($this->username)): ?>
	<p><?= $this->username ?></p>
<?php else: ?>
	<form method="GET">
		<input type="text" name="username">
		<input type="submit"></input>
	</form>
<?php endif; ?>

<?php $this->display('footer.php'); ?>
