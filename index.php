<?php include "includes/html-top.php"; ?>

<body>
	<header>
		<?php include "includes/nav.php";?>
	</header>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="assets/sanfrancisco.jpg" class="d-block w-100" alt="city photo">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>San Francisco</h5>
	        <p>Content About One of the Cities</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="assets/giza_city.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Giza</h5>
	        <p>A picture of the City of Giza</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="https://loremflickr.com/640/360" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Random Page</h5>
	        <p>A picture from the Random Page</p>
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

  <?php include "includes/html-bottom.php"; ?>
</body>
</html>