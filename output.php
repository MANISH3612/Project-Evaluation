<html>
<head>
	<title>Output</title>
	<style type="text/css">
		div {
			position:relative;
			left:600px;
		}
	</style>
</head>
<body bgcolor="orange">
<h2 align="center"> Student Projects Evaluated As : 
<br><br>
<div> 
<?php
$handle = fopen('file3.txt','r');
$n=fgets($handle);
$count=1;
echo "<table border='1'>
<tr>
<th>Student</th>
<th>Grade</th>
</tr>";
while($count<=$n)
  {
  $g=fgets($handle);
  echo "<tr>";
  echo "<td>" .$count. "</td>";
  echo "<td>" .$g. "</td>";
  echo "</tr>";
  $count=$count+1;
  }
echo "</table>";
fclose($handle);

?>
</div>
</h2>
</body>
</html>
