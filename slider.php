<!-- Bootstrap 4 Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators (Optional) -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <!-- Carousel Inner -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?= get_template_directory_uri().'/assets/images/slider1.jpg' ?>" class="d-block w-100" alt="Safari">
        <div class="carousel-caption d-none d-md-block">
            <h5>New collection!</h5>
            <p>Fresh arrival from Italy and it's full of style!</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?= get_template_directory_uri().'/assets/images/slider2.jpg' ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>-50% OFF</h5>
            <p>Use promo (NEW2025) to save money on your first order!</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?= get_template_directory_uri().'/assets/images/slider3.jpg' ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Our worldwide delivery</h5>
            <p>You should know that we're working with delivery all around the world. Cost of the postage will be calculated on the checkout page!</p>
        </div>
    </div>
  </div>

  
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
