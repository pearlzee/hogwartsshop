<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
	<link rel="stylesheet" href="css/sorttable.css" type="text/css" />
	<script src="js/jquery-latest.js"></script>
	<script src="js/jquery.tablesorter.js"></script>

<script type="text/javascript" id="js">$(document).ready(function() {
	// call the tablesorter plugin
	$("table").tablesorter({
		// sort on the first column and third column, order asc
		sortList: [[0,0],[2,0]]
	});
}); </script>

</head>
<body>
<div id="main">

	<h1>Demo</h1>
	<div id="demo">
		<table cellspacing="1" class="tablesorter">
		<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Total</th>
					<th>Discount</th>
					<th>Date</th>
	
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Peter</td>
					<td>Parker</td>
					<td>28</td>
					<td>$9.99</td>
					<td>20%</td>
					
					<td>Jul 6, 2006 8:14 AM</td>
				</tr>
				<tr>
					<td>John</td>
					<td>Hood</td>
					<td>33</td>
					<td>$19.99</td>
					<td>25%</td>
					
					<td>Dec 10, 2002 5:14 AM</td>
				</tr>
				<tr>
					<td>Clark</td>
					<td>Kent</td>
					<td>18</td>
					<td>$15.89</td>
					<td>44%</td>
					<td>Jan 12, 2003 11:14 AM</td>
				</tr>
				<tr>
					<td>Bruce</td>
					<td>Almighty</td>
					<td>45</td>
					<td>$153.19</td>
					<td>44%</td>
					
					<td>Jan 18, 2001 9:12 AM</td>
				</tr>
				<tr>
					<td>Bruce</td>
					<td>Evans</td>
					<td>22</td>
					<td>$13.19</td>
					<td>11%</td>
					<td>Jan 18, 2007 9:12 AM</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>

