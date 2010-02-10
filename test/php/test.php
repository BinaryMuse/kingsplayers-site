<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<table cellspacing="0" cellpadding="0" border="0">
<tr class="subhead" align="Left"><th>Name</th><th>Value</th></tr>
<tr class="normal"><td>PHP_VERSION</td><td><?php echo PHP_VERSION ?></td></tr>
<?php foreach ($HTTP_SERVER_VARS as $name => $value) { ?>
<?php
	if (strpos($name, 'HTTP_') !== 0 && strpos($name, 'REQUEST_') !== 0)
		continue;
	$class = $class === 'alt'? 'normal': 'alt'
?>
<tr class="<?php echo $class ?>"><td><?php echo $name ?></td><td><?php echo $value ?></td></tr>
<?php } ?>
</table>
</body>
</html>
