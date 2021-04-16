<!--Carousel in bootstrap er et slideshow, hvor vi kan cykle gennem elementerne. 
  Crousel komponent bliver brugt i forsiden for at vise ræs billeder.-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">   
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
   <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel3.jpg" alt="carousel3" width="1100" height="600">
      <div class="carousel-caption">
        <h2>Volvo Ocean Race</h2><!--overskrift til billede-->
      </div>   
    </div>

    <div class="carousel-item">
      <img src="images/carousel2.jpg" alt="carousel2" width="1100" height="600">
      <div class="carousel-caption">
        <h2>Volvo Ocean Race</h2><!--overskrift til billede-->
      </div>   
    </div>

    <div class="carousel-item">
      <img src="images/carousel1.jpg" alt="carousel1" width="1100" height="600">
      <div class="carousel-caption">
        <h2>Volvo Ocean Race</h2> <!--overskrift til billede-->
      </div>   
    </div>
  </div>
   <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>