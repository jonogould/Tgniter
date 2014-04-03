<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>You are seriously lost!</title>
	<link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css">
</head>
<body class="container">
	<div class="container-narrow">
		<div class="jumbotron spacious">
			<h1>404 <small>Eish.</small></h1>
			<p class="lead">How did you end up here? This, and other questions, lead you to wonder what happened. Unfortunately we have no answers...</p>
		</div>
		
		<div class="row-fluid marketing">
			<div class="span12">
				<p>Your original request was <strong><?php echo $request; ?></strong>, but this could not be found :(</p>
			</div>
		</div>

		<hr>

		<div class="footer">
			<p><center>&copy; Tgniter by <a href="http://travelground.com">TravelGround.com</a></center></p>
		</div>
	</div>
</body>
</html>
