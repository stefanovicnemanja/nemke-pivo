<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="/beer/create">upisi novo pivo</a>
	
	<p>Овде су сва пива.</p>

	<ul>
		<?php foreach($beers as $key => $beer) : ?>

		<li><a href="/beer/<?php echo $key ?>"><?php echo $beer; ?></a></li>

		<?php endforeach; ?>
	</ul>
</body>
</html>