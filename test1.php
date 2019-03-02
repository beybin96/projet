<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.global{
			width:;
			padding: 20px;
			position :absolute;
			top:50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
	
</head>
<body>

	<div class="global">
		<div class="article">
		
			<table>
				
				<form action="" method="post">
					<tr>
						<th>Date</th>
						<th>operation</th>
						<th>débit</th>
						<th>crédit</th>
						<th>solde</th>
					</tr>
					<tr>
						<td><input type="Date" name="date"></td>
						<td><input type="text" name="operation1"></td>
						<td><input type="number" name="" maxlength="4" ></td>
						<td><input type="number" name="" maxlength="4" ></td>
						<td><input type="number" name="solde" maxlength="4" ></td>
					</tr>
					<tr>
						<td><input type="Date" name="date1" ></td>
						<td><input type="text" name="operation2" ></td>
						<td><input type="number" name="Debit2" maxlength="4" ></td>
						<td><input type="number" name="credit2" maxlength="4" ></td>
						<td>
							<!-- answer php -->
							<?php
							?>
						 	
						</td>
					</tr>
					<tr>
						<td><input type="Date" name="date2" maxlength="4"></td>
						<td><input type="text" name="operation3"></td>
						<td><input type="number" name="Debit3" maxlength="4" ></td>
						<td><input type="number" name="credit3" maxlength="4" ></td>
						<td></td>
					</tr>
					<tr>
						<td><input type="Date" name="date3" maxlength="4" ></td>
						<td><input type="text" name="operation4" ></td>
						<td><input type="number" name="Debit4" maxlength="4" ></td>
						<td><input type="number" name="credit4" maxlength="4" ></td>
					</tr>
					<tr>
						<td><input type="Date" name="date4" maxlength="4" ></td>
						<td><input type="text" name="operation5"></td>
						<td><input type="number" name="Debit5" maxlength="4" ></td>
						<td><input type="number" name="" maxlength="4" ></td>
					</tr>
					<tr>
						<td colspan='5' align="center">
							<input type="submit" name="save" value="save">
							<input type="reset" name="" value="clear">
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>

</body>
</html>