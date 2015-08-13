<?php header("Location: ..", true, 301);>
$PAGE_TITLE = "My Capstone Project";
require_once("lib/utilities.php");
?>
<div class="container">
	<header>
		<?php require_once("lib/header.php"); ?>
	</header>

	<div class="row">
		<section class="side-panel col-md-3">
			<?php require_once("lib/side-panel.php"); ?>
		</section>

		<section class="main-content col-md-9">
			<h1>Hello World skyler is stupid</h1>
			<p>This is the main page content here.</p>
		</section>
	</div>

	<footer class="footer">
		<?php require_once("lib/footer.php"); ?>
	</footer>
</div><!-- .container -->

</body>
</html>