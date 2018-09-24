<html>
<head>
	<title>Project Evaluation</title>
	<style type="text/css">
	div {
		width:600px;
		border:1px solid grey;
		margin:0 auto;
		padding:20px;
	}
</style>
</head>
<body bgcolor="pink">
	<h1 align="center"><i><u>PROJECT EVALUATION</i></u></h1><br><br>
	<h2>	
	<?php
		$handle = fopen('file2.txt', 'r');
		$en=fgets($handle);
		$s=fgets($handle);
		echo "Expert ";
		echo $en;
		echo " has to evaluate student ";
		echo $s;
		fclose($handle);
	?>	
	<br><br></h2>
	<div>
	<form method="post" action="eval.php">
		<h4>1.Based on Documentation:</h4>
		<input type="radio" name=a value="e" checked>  Excellent <br>
		<input type="radio" name=a value="v">  Very Good <br>
		<input type="radio" name=a value="g">  Good <br>
		<input type="radio" name=a value="a">  Average <br>
		<input type="radio" name=a value="f">  Fair <br>		
		<input type="radio" name=a value="b">  Bad <br>
		<h4>2.Based on Presentations:</h4>
		<input type="radio" name=b value="e" checked>  Excellent <br>
		<input type="radio" name=b value="v">  Very Good <br>
		<input type="radio" name=b value="g">  Good <br>
		<input type="radio" name=b value="a">  Average <br>
		<input type="radio" name=b value="f">  Fair <br>		
		<input type="radio" name=b value="b">  Bad <br>
		<h4>3.Based on Security:</h4>
		<input type="radio" name=c value="e" checked>  Excellent <br>
		<input type="radio" name=c value="v">  Very Good <br>
		<input type="radio" name=c value="g">  Good <br>
		<input type="radio" name=c value="a">  Average <br>
		<input type="radio" name=c value="f">  Fair <br>		
		<input type="radio" name=c value="b">  Bad <br>
		<h4>4.Based on Functionality:</h4>
		<input type="radio" name=d value="e" checked>  Excellent <br>
		<input type="radio" name=d value="v">  Very Good <br>
		<input type="radio" name=d value="g">  Good <br>
		<input type="radio" name=d value="a">  Average <br>
		<input type="radio" name=d value="f">  Fair <br>		
		<input type="radio" name=d value="b">  Bad <br>
		<h4>5.Based on User Interface:</h4>
		<input type="radio" name=e value="e" checked>  Excellent <br>
		<input type="radio" name=e value="v">  Very Good <br>
		<input type="radio" name=e value="g">  Good <br>
		<input type="radio" name=e value="a">  Average <br>
		<input type="radio" name=e value="f">  Fair <br>		
		<input type="radio" name=e value="b">  Bad <br>
		<h4>6.Based on Modularity:</h4>
		<input type="radio" name=f value="e" checked>  Excellent <br>
		<input type="radio" name=f value="v">  Very Good <br>
		<input type="radio" name=f value="g">  Good <br>
		<input type="radio" name=f value="a">  Average <br>
		<input type="radio" name=f value="f">  Fair <br>		
		<input type="radio" name=f value="b">  Bad <br>
	<h2 align="center"><input type="Submit" name="submit" value="Submit"/></h2>
	</form>
	</div>
</body>
</html>
