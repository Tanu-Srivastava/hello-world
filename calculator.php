<!DOCTYPE HTML>
<html>
<head>
<meta char = "UTF-8">
<title>CALCULATOR</title>
</head>
<body>
<form>
    <input type="text" name="num1" placeholder="number1">
	<input type="text" name="num2" placeholder="number2">
	<select name="operator"><option>none</option>
	                        <option>add</option>
							<option>subtract</option>
							<option>multiply</option>
							<option>divide</option>
	</select>
	<br>
	<button name="submit" value="submit" type="submit"> CALCULATE </button>
</form>
<p>this is answer: </p>
<?php
    if(isset($_GET['submit']))
	{
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch($operator)
		{
			case "none":
			    echo "you need to enter numbers";
			break;
			case "add":
			    echo $result1 + $result2;
			break;
			case "subtract":
			    echo $result1 - $result2;
			break;
			case "multiply":
			    echo $result1 * $result2;
			break;
			case "divide":
			    echo $result1 / $result2;
			break;
		}
			
	}
?>
</body>
</html>