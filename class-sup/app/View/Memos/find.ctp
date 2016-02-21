<html>
	<head>
		<title>Index Page</title>
	</head>
	<body>
	<h1>Index Page</h1>
	<p>this is test View.</p>
	<form method="post" action="./find">
		ID:<input type="text" name="id" />
		<input type="submit" />
	</form>

	<table>
	<?php if (isset($memo)):?>
		<tr>
			<td>Name:</td>
			<td><?php echo $memo['Memo']['name']; ?></td>
		</tr>
		<tr>
			<td>Mail:</td>
			<td><?php echo $memo['Memo']['mail']; ?></td>
		</tr>
		<tr>
			<td>Tel:</td>
			<td><?php echo $memo['Memo']['tel']; ?></td>
		</tr>
	<?php endif; ?>
	</table>
	</body>
</html>