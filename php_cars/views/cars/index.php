<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
</head>
<body>
	<h1>Cars Index Page</h1>
	<section>
		<ul>
			<?php while($row = $cars-> fetch_object()): ?>
				<li>
					Here is a <?php echo $row->car ?> for <?php echo $row->owner ?>
				</li>
			<?php endwhile; ?>	
		</ul>
	</section>
</body>
</html>