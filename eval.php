<html>
<head>
	<title>Form Processed</title>
</head>
<body bgcolor="pink">
<h3 align="center"><i>
<?php

$handle = fopen('file.txt', 'a');
$a=$_POST["a"];
fwrite($handle, $a);
fwrite($handle, "\n");
$b=$_POST["b"];
fwrite($handle, $b);
fwrite($handle, "\n");
$c=$_POST["c"];
fwrite($handle, $c);
fwrite($handle, "\n");
$d=$_POST["d"];
fwrite($handle, $d);
fwrite($handle, "\n");
$e=$_POST["e"];
fwrite($handle, $e);
fwrite($handle, "\n");
$f=$_POST["f"];
fwrite($handle, $f);
fwrite($handle, "\n");
fclose($handle);


echo"Thanks for evaluating.. ";

?>
</h3></i>
</body>
</html>
