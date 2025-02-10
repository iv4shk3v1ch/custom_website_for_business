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
            <h5>Я Люблю сафари</h5>
            <p>В сафари реально ахуенно, ну реально правда ахуенно</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?= get_template_directory_uri().'/assets/images/slider2.jpg' ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Я ебал карусель эту</h5>
            <p>очко горит</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?= get_template_directory_uri().'/assets/images/slider3.jpg' ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Я ебал карусель эту</h5>
            <p>а вы любите маму?</p>
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
