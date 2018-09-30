<html>
<head>
	<title>Registered Successfully</title>
</head>
<body bgcolor="yellow">
<h2 align="center">
<?php

$handle = fopen('file2.txt','r');
$count=fgets($handle);
fclose($handle);
$count=$count+1;
echo "Expert ID is ";
echo $count;

$handle = fopen('file2.txt', 'w');
fwrite($handle,0);
fclose($handle);

$handle = fopen('file1.txt', 'w');
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

?>
</h2>
<h3 align="center">Thank You</h3>
</body>
</html>
