<!DOCTYPE html>
<html lang="dk">
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> <!--Anvendelse af bootstrap -->
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
		    <!-- Form -->
		    <form method="post" action="index.php"> <!-- Filnavn for den fil php-koden står i -->
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" /> <!-- Inputfelt -->
		        <select name="operation"> <!-- Drop down med muligheder-->
		        	<option value="+">Plus</option>
		            <option value="-">Minus</option>
		            <option value="*">Gange</option>
		            <option value="/">Divider</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" /> <!-- Inputfelt-->
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
                <?php
				// Tjekker oom knappen er tryppet på
				if(isset($_POST['submit']))
				{
					// Ser på om der er tal der er indtastet
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						
						if($_POST['operation'] == '+') // Beregner resultatet hvis operation er +
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == '-') // Beregner resultatet hvis operation er -
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == '*') // Beregner resultatet hvis operation er *
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == '/') // Beregner resultatet hvis operation er /
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";  // Udskriver resultatet til browseren
					} else {
						
						echo 'Der skal bruges tal-værdier'; // Udskriver fejlmeddelelse, der siger den har brug for talværdier
					}
				}
			
			?>
		</div>
	
	</body>
</html>
