<?php
session_start();

if(!empty($_POST))
{
	$_SESSION['color'] = $_POST['color'];
	$_SESSION['font'] = $_POST['font'];
	$_SESSION['fontsize'] = $_POST['fontsize'];
	header("Location: tekst.php");
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<style type="text/css">
		ul#menu {
			float: left;
			width: 10%;
			list-style-type: none;
		}

		div#tresc {
			float: left;
			width: 85%;
		}

		div#tresc table span {
			padding: 3px;
		}
	</style>
</head>

<body>
	<ul id="menu">
		<li><a href="tekst.php">Tekst</a></li>
		<li><a href="ustawienia.php">Ustawienia</a></li>
	</ul>
	<div id="tresc">
		 <form method="post" action="">
			<tr>
				<td>Kolor tla strony:</td>
				<td>
					<br>
					<input type="radio" name="color" value="#BAFF49"/> <span style="background-color: #BAFF49">#BAFF49</span><br />
					<input type="radio" name="color" value="#8E9BFF"/> <span style="background-color: #8E9BFF">#8E9BFF</span><br />
					<input type="radio" name="color" value="#FFEFBF"/> <span style="background-color: #FFEFBF">#FFEFBF</span><br />
				</td>
			</tr>
			<tr>
				<td>Krój czcionki:</td>
				<td>
					<select name="font">
						<option>Verdana</option>
						<option>Arial</option>
						<option>Courier New</option>
					</select>
				</td>
			</tr>
			<tr>
				<br>
				<td>Wielkość czcionki:</td>
				<td><input type="text" name="fontsize" style="width: 30px" />px</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<button type="submit"> Send </button>
			</tr>
		</form>
	</div>
</body>

</html>