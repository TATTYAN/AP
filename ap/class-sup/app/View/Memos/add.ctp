<html>
	<head>
		<title>Index Page</title>
	</head>
	<body>
	<h1>Index Page</h1>
	<p>Memo Add Form.</p>
	<?php
		echo $this->Form->create('Memo');
		echo $this->Form->input('name');
		echo $this->Form->input('mail');
		echo $this->Form->input('tel');
		echo $this->Form->end('Submit');
	?>

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