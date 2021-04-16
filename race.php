<!------------------inkludere database fil for at hente data for resultattavlen----------------------------------------->
<?php include 'database.php'; ?> 

<!------------------viser skib animation/frames og data fra tabel----------------------------------------->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" id="Resultattavlen"> Volvo Ocean Ræset -  Resultattavlen </h2>
  </div>

  <!-- Race section -->
  <!--Et card er en fleksibel og udvidelig indhold beholder.
  class card-group bruges til at holde animation(båd image) og resultat-->
  <div class="card-group">
      <div class="card p-5 mb-2 col-sm-9 border-0 bg-info text-white">
        <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <div class="py-4"><race id="race1"><img src=images/sailing31.png></race></div> <!--båd image-->
        </div>
      </div> 
      <div class="card p-5 mb-2  col-sm-3 border-0 bg-info text-white">
        <div class="card-img-overlay">
          <p class="text-right">  <!-- Right-aligned tekst på alle visningsstørrelser-->
             <!--php echo henter data fra serveren og viser top team på browseren-->       
            <label >1st Place: <?php echo $name[0];?>   </label><br>
            <label>Points total: <?php echo $points[0];?>  A total of 11 Legs incl. 2 extra</label>          
            </p>     
        </div>    
      </div>  
  </div>

  <div class="card-group">
      <div class="card p-5 mb-2  col-sm-9 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <div class="py-4"><race id="race2"><img src=images/sailing21.png></race></div> <!--båd image-->
        </div>
      </div> 
      <div class="card p-5 mb-2 col-sm-3 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
             <p class="text-right"> <!-- Right-aligned tekst på alle visningsstørrelser-->
             <!--php echo henter data fra serveren og viser top team på browseren-->             
            <label>2nd Place:  <?php echo $name[1];?> </label><br>
            <label>Points total:  <?php echo $points[1];?> A total of 11 Legs incl. 3 extra</label>
            </p>        
        </div>
      </div> 
  </div>
    
     <div class="card-group">
      <div class="card p-5 mb-2  col-sm-9 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <div class="py-4"><race id="race3"><img src=images/sailing11.png></race></div> <!--båd image-->
        </div>
      </div> 
      <div class="card p-5 mb-2 col-sm-3 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <p class="text-right"> <!-- Right-aligned tekst på alle visningsstørrelser-->
             <!--php echo henter data fra serveren og viser top team på browseren-->           
            <label>3rd Place: <?php echo $name[2];?>  </label><br>
            <label>Points total:  <?php echo $points[2];?> A total of 11 Legs incl. 4 extra</label>
            </p>        
        </div>
      </div> 
  </div>

       <div class="card-group">
      <div class="card p-5 mb-2  col-sm-9 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <div class="py-4"><race id="race4"><img src=images/sailing31.png></race></div> <!--båd image-->
        </div>
      </div> 
      <div class="card p-5 mb-2 col-sm-3 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
              <p class="text-right"> <!-- Right-aligned tekst på alle visningsstørrelser-->
             <!--php echo henter data fra serveren og viser top team på browseren-->          
            <label>4th Place: <?php echo $name[3];?> </label><br>
            <label>Points total:  <?php echo $points[3];?>  A total of 11 Legs incl. 5 extra</label>
            </p>        
        </div>
      </div> 
  </div>

       <div class="card-group">
      <div class="card p-5 mb-2  col-sm-9 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
          <div class="py-4"><race id="race5"><img src=images/sailing21.png></race></div> <!--båd image-->
        </div>
      </div> 
      <div class="card p-5 mb-2 col-sm-3 border-0 bg-info text-white">
         <!--card-img-overlay class bruges for at tilføje tekst ovenpå billedet -->
        <div class="card-img-overlay">
            <p class="text-right">   <!-- Right-aligned tekst på alle visningsstørrelser-->
             <!--php echo henter data fra serveren og viser top team på browseren-->       
            <label>5th Place:  <?php echo $name[4];?> </label><br>
            <label>Points total:  <?php echo $points[4];?> A total of 11 Legs incl. 7 extra</label>
            </p>        
        </div>
      </div> 
  </div>

    <div  class="p-2 mb-2 bg-info text-white"></div>    
</section>




