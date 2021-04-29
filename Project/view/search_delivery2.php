<?php 
	include('delivery_header.php');
?>

<head>
	<title>Delivery Man Information Search</title>
	<script type="text/javascript" src="../controller/search.js"></script>
</head>
<body>
	<h1 id='myid'>Delivery Man Information Search</h1>
	<form>
		<input type="text" name="name" id="name" value="" onkeyup="live_search()" />
	</form>
	<br>
	<br>
	<div id='output'></div>
</body>
