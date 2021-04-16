<!--En standard nav bar oprettes med .navbar-klassen af bootstrap efterfulgt af en responsiv kollapsende klasse: .navbar-expand- md -->
<nav class="navbar navbar-expand-md bg-light navbar-light"> 
      <h1 class="navbar-brand">Volvo Ocean Race</h1>
      <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>  
  </button>

  <!--nav bar er skjult på små skærmen og erstattet af en knap i øverste højre hjørne når man prøver at ændre størrelsen på dette vindue-->
   <div class="collapse navbar-collapse" id="collapsibleNavbar">   <!--Collapsible Navbar-->
      <!-- Navbar links -->
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> 
                
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Forside</a> <!--forside link er aktiv -->
          </li>
                      
          <li class="nav-item">
            <a class="nav-link" href="#Resultattavlen">Resultattavlen</a> 
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#Videor">Videor</a>
          </li>
        </ul>
      </div>
  </nav>


