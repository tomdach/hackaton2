<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<title>SIMPLON - Hackathon</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="pages/footer.css" media="screen" title="no title">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("body").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
			event.preventDefault();
		});
	});
	</script>
</head>

<body>

	<div id="cercle">
	</div>
	<div id="cercle2">
		<?php
		include_once("pages/footer.php");
		 ?>
	</div>

	<div id="page-wrap">

		<div id="menu">
			<div>
				<h1>SIMPL<span>O</span>N</h1>
			</div>
			<div style="margin-left:70%;">
				<div class="dropdown">
				  <button class="dropbtn">MENU</button>
				  <div class="dropdown-content">
				    <a href="#">Présentation</a>
						<a href="#">Actualité</a>
				    <a href="#">Book</a>
				    <a href="#">Forum</a>
						<a href="#">FAQ</a>
				  </div>
				</div>
			</div>
		</div>

		<div id="pres">
			<h2>SIMPLON</h2>
			<p>
				Lorem ipsum quisque id orci sed ex tincidunt faucibus. Ut leo est, iaculis quis commodo nec, egestas a sem. Suspendisse vehicula dapibus aliquet. Quisque venenatis elit vel ante aliquet pharetra quis sed risus. Aenean tellus ante, egestas ut quam ut, suscipit posuere leo. Curabitur non suscipit dui, a finibus metus. Sed iaculis maximus sapien ut dapibus. Nunc convallis ultricies mauris, eu placerat dui aliquet at. Sed dictum aliquet urna, eu venenatis libero rhoncus eu. Phasellus ullamcorper vulputate commodo. Aenean gravida nisi diam, vitae vulputate tellus vestibulum feugiat. Etiam feugiat, mauris et luctus elementum, purus dui lobortis tellus, non volutpat sapien ligula in est. Pellentesque enim sem, commodo ac sodales sit amet, laoreet condimentum augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
			</p>
		</div>

	</div>

</body>

</html>
