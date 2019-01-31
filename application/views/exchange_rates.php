<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exchange Rates</title>
</head>
<body>
	<h2>Exchange Rates</h2>
	<h4><a href="http://localhost/igniter/index.php/ExchangeRates/history">History Exchange Rates</a></h4>
	<table border="2" align="center" width="60%">
		<?php foreach ($exchange_rates as $rates): ?>
			<tr>
			<th>Currency</th>
			<th>Base currency</th>
			<th>Buy</th>
			<th>Sale</th>
			</tr>
			<tr>
			<td><?php echo $rates->ccy;?></td>
			<td><?php echo $rates->base_ccy;?></td>
			<td><?php echo $rates->buy;?></td>
			<td><?php echo $rates->sale;?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>