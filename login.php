<html>
<head>
	<title>Login Successful</title>
</head>
<body bgcolor="red">
<?php
$handle = fopen('file2.txt', 'w');
$id=$_GET["id"];
fwrite($handle,$id);
fclose($handle);

?>
<h1 align="center">WELCOME</h1>
</body>
</html>
