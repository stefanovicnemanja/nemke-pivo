<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Овде су сва пива.

	<ul>
		<?php foreach($beers as $key => $beer) : ?>

		<li><a href="/piva/single/<?php echo $key ?>"><?php echo $beer; ?></a></li>

		<?php endforeach; ?>
	</ul>
</body>
</html>