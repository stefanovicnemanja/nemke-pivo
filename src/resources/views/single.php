<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Ође ти је једно пиво. БА!</p>

	<p> <?php echo $beer['name']; ?> <a href="/beer/<?php echo $beer['id'] ?>/edit">Промени <?php echo $beer['name']; ?></a></p> 

	<a href="/beer"><< Назад на сва пива.</a>
</body>
</html>