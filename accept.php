<html>
<head>
	<title>Input Accepted</title>
</head>
<body bgcolor="lime">
Recorded.
<?php

$handle = fopen('file2.txt', 'w');
$n=$_GET["n"];
fwrite($handle, $n);
fwrite($handle, "\n");
$s=$_GET["s"];
fwrite($handle, $s);
fwrite($handle, "\n");
fclose($handle);


?>
</body>
</html>
