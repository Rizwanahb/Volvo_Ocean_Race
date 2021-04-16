<!-- Vidoer Section --->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" id="Videor">Videor</h2> <!--class text-center tager overskrift til midten -->
  </div>
 <!--container-fluid ændrer størrelsen, når du ændrer bredden på dit vindue / browser. -->
  <div class="container-fluid">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-12">
           <!--Et card er en fleksibel og udvidelig indhold beholder.-->
        <div class="card">
          <!--Bootstraps embed-responsive giver en nem måde at skalere videoer og diasshow til deres indeholdende blok. -->
          <div class="embed-responsive embed-responsive-16by9">
            <!--iframe gør det muligt at embede et HTML dokument inde i et andet dokument. Her
            indholdet af en iFrame, er en video fra YouTube. Det er en IFRAME hvori man har et link til videoen-->
            <iframe src="//www.youtube.com/embed/912e4aNkErQ" width="600" height="336" allowfullscreen="allowfullscreen"></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Card title</h4> <!--card-title til at tilføje kort titel for overskrift element-->
             <!--card-text is used to remove bottom margins for a <p> element if it is the last child (or the only one) inside -->
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
           <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/VE2o7SyDW54" width="600" height="336" allowfullscreen="allowfullscreen"></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/h_3FcPXhGts"  width="600" height="336" allowfullscreen="allowfullscreen"></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5"></div> <!--py sets padding top & bottom to 3rem -->
  <div class="py-5"></div>
</section>
