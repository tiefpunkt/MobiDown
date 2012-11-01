<!DOCTYPE html>
<html lang="en">
<head>
	<title>MobiDown - Markdown to eBook converter</title>
	<!-- Bootstrap -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="main.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<header>
			<h1>MobiDown <small>Create your own eBook from Markdown in seconds.</small></h1>
		</header>
		
		<p>MobiDown allows you to read Markdown on your Kindle eBook reader. Just copy your Markdown-formatted text, aticle or even complete book into the textbox down below, click the "Create eBook" button, and MobiDown will generate a .mobi eBook which you can the put onto your Kindle.</p>
		
		
		<form action="./converter.php" method="post">
				<textarea name="content"></textarea><br/>
				<button type="submit" class="btn btn-primary"><i class="icon-book icon-white"></i> Create eBook</button>
		</form>
		<footer>
			<?php
					if (is_file('./footer.inc.php')) {
						include('./footer.inc.php');
					} else {
						echo "MobiDown v0.2 by <a href=\"http://twitter.com/tiefpunkt\">tiefpunkt</a> | <a href=\"http://github.com/tiefpunkt/MobiDown\">GitHub Repository</a>";
					}
				?>
		</footer>
	</div>
</body>
</html>
