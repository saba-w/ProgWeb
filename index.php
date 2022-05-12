<?php
require_once("lang.php");
 include 'head.php' ?>

<body>
	<div class="page">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" role="listbox">

				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image:
							url('http://localhost/progweb/pictures/store1.jpeg')">
					<div class="carousel-caption ">
						<h3 class="display-4"><?php echo $lang['page1'] ?></h3>

					</div>
				</div>

				<!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image:
							url('http://localhost/progweb/pictures/store2.jpeg')">
					<div class="carousel-caption ">
						<h3 class="display-4"><?php echo $lang['page1'] ?></h3>

					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<h1 style="font-weight: 700px; margin-left: 230px;"><?php echo $lang['Bienvenue'] ?></h1>
		<p><?php echo $lang['Presentation'] ?>
		</p>

		<div class="row">
			<div class="column" onclick="openTab('b1');" ><?php echo $lang['berbere'] ?>
			<img src="./pictures/berbere.jpg" alt="<?php echo $lang['berbere'] ?>">
			</div>
			<div class="column" onclick="openTab('b2');" ><?php echo $lang['Md'] ?>
			<img src="./pictures/multi-dress.jpg" alt="<?php echo $lang['Md'] ?>">
			</div>
		</div>
		<div id="b1" class="containerTab" style="display:none;background-color:grey;">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
			<h2><?php echo $lang['berbere'] ?></h2>
			<p><?php echo $lang['Berbere'] ?></p>
			<a href="http://localhost/progweb/epices.php"><?php echo $lang['Plus'] ?></a>
		</div>
		<div id="b2" class="containerTab" style="display:none;background-color:grey;">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
			<h2><?php echo $lang['Md'] ?></h2>
			<p><?php echo $lang['Multi-dress'] ?></p>
			<a href="http://localhost/progweb/habits.php"><?php echo $lang['Plus'] ?></a>
		</div>
	</div>

<script src="index.js"></script>
<script src="produit.js"></script>
<?php include 'footer.php' ?>
</body>