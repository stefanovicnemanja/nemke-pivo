<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="/beer/<?php echo $beer['id']; ?>">Врати на пиво <?php echo $beer['name']; ?></a>
	<form action="/beer">
		<input type="text" value="<?php echo $beer['name']; ?>">
		<input type="submit">
	</form>

</body>
</html>