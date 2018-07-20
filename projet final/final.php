<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">HSL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href ="incrip.php">s'inscrire</a></li>
        <li ><a href ="conect.php">se conecter</a></li>
        <li><a href="#about">A PROPOS</a></li>
        <li><a href="#services">MEDECINE</a></li>
        <li><a href="#portfolio">INFORMATIQUE</a></li>
        <li><a href="#ECONOMIE">ECONOMIE</a></li>
        <li><a href="#TECHNIQUE">TECHNIQUE</a></li>
        <li><a href="#contact">QUESTIONAIRE</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Hight school leader</h1> 
  
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2 align="center">A propos de hight school leader</h2><br>
      <h4 align="center">HSL est une nouvelle plateforme nationale d’admission en première année des formations de l’enseignement supérieur e Tunisie. 
                 notre projet permet aux étudiants et lycéens d'accéder aux écoles rapidement à la rentrée 2018. Pour faciliter la tâche aux gens, un 
                 questionnaire est proposé pour aider les étudiants et les orienter vers les bonnes écoles. Suite au questionnaire une liste 
                 d'établissements est proposée selon le domaine et le score des étudiants. Nous disposons aussi d'un forum public ou tout le monde peut 
                 poser des questions pour se renseigner sur les écoles. Des anciens élèves des facultés sont présents pour aider les étudiants à faire leur choix.               </h4>
      
    </div>
    
      
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
            
      <h4><strong>MISSION:</strong> Aider les bacheliers en tunisie à mieux faire des choix dans leur orientation sans perdre du temps.</h4><br>
      <p><strong>VISION:</strong> Notre vision est d'avoir une base de données plus étendue sur toutes les facultés en tunisie pour permettre aux lycéens d'avoir un plus grand  choix pour leur orientation. </p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SCIENCE</h2>
  <h4>Faculté</h4>
   <div>
            <div class='slide4'>
            <center><p id="c1"><h3><center>Faculté de medecine de Tunis</center></h3></p>
            <div class="col-md-4"><img  class='i-development' src="res/fmt.jpeg" width="400px"></div><br>
            <div class="col-sm-6"> 
              <p>Domaine : médecine</p>
              <p>type de filière: Mathématiques / Sciences expérimentales</p>
              <p>Adresse: 15 Rue Djebel Lakhdhar. La Rabta. 1007, Tunis - Tunisie</p>
              <p>Numéro tel/fax: 71 56 37 09- 71 56 94 27   </p> </div> 
              </div>
         
          <div class='slide5'>
              <center><p id="c1"><h3><center>Faculté de medecine de Monastir</center></h3></p>
              <div class="col-md-4"><img  class='i-development' src="res/medecine monastir.jpg" width="400px"></div><br>
              <div class="col-sm-6"> 
                  <p>Médecine de Monastir est placée sous la double tutelle du ministère de 
                      l’enseignement supérieur et de la recherche scientifique et le ministère 
                       la santé.</p>
                  <p>Type de filière: Mathématiques / Sciences expérimentales</p>
                  <p>Adresse: Avenue Avicenne - Monastir  </p>
                  <p>Numero: 98 454 995-73 460 832 </p>  </div>
                </div>
           
        <div class='slide6'>
            <h3><span class="a">Faculté de médecine</span> faculté de medecine dentaire de Monastir</h3></center>
            <div class="col-md-4"><img  class='i-development' src="res/dentairemonastir.jpg" width="400px"></div><br>
            <div class="col-sm-6"> 
            <p>Domaine: Dentaire</p>
            <p>Type de filière: Mathématiques / Sciences expérimentales</p>
            <p> Adresse : Avenue Avicenne-Monastir </p>
            <p> Téléphone : 73 46 08 32 // Fax : 73 46 11 50</p></div>
            <br><br><br>

          </div>
          

</div>
<br><br><br>

<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 align="center">INFORMATIQUE</h2>
  <h4 align="center">Faculté</h4>
  <div class='slide2'>
                  <center><p id="c1"><h3>INSAT de Tunis</h3></p>
                  <p>Institut National des Sciences Appliqués et de Technologie<p/></center>
                  <div class="col-md-4"><img  class='i-development' src="res/Insat.jpg" width="400px"></div><br>
                  <div class="col-sm-6">
                  <p>Domaine: Ingénieurie/Informatique/Mathématiques/Architecture/</p>
                  <p>Adresse: INSAT Centre Urbain Nord BP 676 - 1080 Tunis Cedex</p>
                  <p>Numéro: 71 703 829 - 71 703 929</div>
                </div><br>


              
            
              <div class='slide3'>
                  <center><p id="c1"><h3>ISAMM</h3></p>
                  <p>Institut Supérieur des Arts et Multimédia de Manouba</p></center>
  <div class="col-md-4"><img  class='i-development' src="res/isamm.jpg" width="400px"></div><br>
                  <div class="col-sm-6">
                    <p>Domaine : Informatique/Arts/Ingénieurie</p>
                    <p>Adresse : Campus Universitaire de La Manouba - CP 2010, Tunis, Tunisie.</p>
                    <p>Numéro : 71 603 498-71 603 450</p></div>
                </div><br>
    </div>
    <div id="ECONOMIE" class="container-fluid text-center bg-grey">
  <h2 align="center">ECONOMIE</h2>
  <h4 align="center">Faculté</h4>
  <div class='slide11'>
                      <center><p id="c1"><h3>ISG</h3></p>
                      <p><h4>Institut Supérieur de Gestion de Tunis</h4></p></center>
                      <div class="col-md-4"><img  class='i-development' src="res/isg.jpg" width="400px"></div><br>
                      <div class="col-sm-6"> 
                          <p>Type de filière requis: Science/Economie Scientifique </p>
                          <p>Domaine: Economie et Gestion</p>
                          <p>Adresse: 41 Avenue de la Liberté, Bouchoucha, Bardo 2000, Tunis, Tunisie</p>
                          <p>Numéro: 71 588 514-71 588 350</p></div>
                    </div>
                  <div class='slide10'>
                      <center><p id="c1"><h3>ESSECT</h3></p>
                      <p><h4>Ecole Supérieure des Sciences Economiques et Commerciales de Tunis</h4></p></center>
                      <div class="col-md-4"><img  class='i-development' src="res/essectrogne.jpg" width="400px"></div><br>
                      <div class="col-sm-6"> 
                          <p>Formation: Economie / Gestion / Technique</p>
                          <p>Adresse:  4, Rue Abou Zakaria El Hafsi - 1089 Montfleury - Tunis</p>
                          <p>Numéro: 71 330 266-71 333 518  </p></div>
                    </div>




    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

 
<div id="TECHNIQUE" class="container-fluid">
  <h2 align="center">TECHNIQUE</h2>
  <h4 align="center">Faculté</h4>
  <div class='slide11'>
                      <center><p id="c1"><h3>ISG</h3></p>
                      <p><h4>Institut Supérieur de Gestion de Tunis</h4></p></center>
                      <div class="col-md-4"><img  class='i-development' src="res/isg.jpg" width="400px"></div><br>
                      <div class="col-sm-6"> 
                          <p>Type de filière requis: Science/Economie Scientifique </p>
                          <p>Domaine: Economie et Gestion</p>
                          <p>Adresse: 41 Avenue de la Liberté, Bouchoucha, Bardo 2000, Tunis, Tunisie</p>
                          <p>Numéro: 71 588 514-71 588 350</p></div>
                    </div>
                  <div class='slide10'>
                      <center><p id="c1"><h3>ESSECT</h3></p>
                      <p><h4>Ecole Supérieure des Sciences Economiques et Commerciales de Tunis</h4></p></center>
                      <div class="col-md-4"><img  class='i-development' src="res/essect1.jpg" width="400px"></div><br>
                      <div class="col-sm-6"> 
                          <p>Formation: Economie / Gestion / Technique</p>
                          <p>Adresse:  4, Rue Abou Zakaria El Hafsi - 1089 Montfleury - Tunis</p>
                          <p>Numéro: 71 330 266-71 333 518  </p></div>
                    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <?php 
$bdd = new PDO('mysql:host=localhost;dbname=amine;charset=utf8', 'root', '');
if (isset($_POST["submit"]))
{
     $name=$_POST["name"];
     $age=$_POST["age"];
     $adresse=$_POST["adresse"];
     $score=$_POST["score"];
     $Domaine=$_POST["Domaine"];
    if (!empty($_POST["name"]) AND !empty($_POST["age"]) AND !empty($_POST["adresse"])AND !empty($_POST["score"]) AND !empty($_POST["Domaine"])) 
    {
      $insert=$bdd->prepare("INSERT INTO orientation(name,age,adresse,score,domaine) VALUES(?,?,?,?,?)");
      $insert->execute(array($name,$age,$adresse,$score,$Domaine));
    }
    else
    {
      $eror="tout les cases doit etre remplis";
    }
}
?>






<form method="post" >
<div class="form-group-inline">
  <label for="usr">Name:</label>
  <input name="name" type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">age:</label>
  <input name="age" type="number" class="form-control" id="pwd">
</div>
<div class="form-group">
  <label for="pwd">Adresse</label>
  <input name="adresse" type="text"  class="form-control" id="pwd">
</div>
<div class="form-group">
  <label for="pwd">score</label>
  <input name="score" type="number"  class="form-control" id="pwd">
</div>

<label for="sel1">Domaine:</label>
  <select name="Domaine" class="form-control" id="sel1">
    <option>Informatique</option>
    <option>Science</option>
    <option>Economie</option>
    <option>Technique</option>
  </select>
  <div class="form-group">
  <br>
  <input type="submit" name="submit" class="form-control" id="pwd">
</div>
</form>
<div align="center" class="recherche">
<?php if (isset($eror)){echo "<p align='center'>".$eror."</p>";}
   if (isset($_POST["submit"])) {
      $fac=$bdd->prepare("SELECT * FROM faculte WHERE domaine=? AND score<=?");
   $fac->execute(array($Domaine,$score));
   
   while($faculte=$fac->fetch())
   {
      echo "<h1>".$faculte["name"] . '</h1><pre><br><img height="100%" width="100%" src ="'.$faculte["img"].'">
      </pre> <br> <h4> '. $faculte["description"]."<br><a href='".$faculte["link"]."'>".
      $faculte["link"]."</a></h4><br> <br> <br>";

   }
 }
   
  


 ?>
</div>

<!-- Add Google Maps -->

<script >
  
$(document).ready(function(){
    
        $(".slide2").css("transform","translate(200px,0)");
        $(".slide2").css("opacity", 1);

    });

$(document).ready(function(){
   
        $(".slide3").css("transform","translate(200px,0)");
        $(".slide3").css("opacity", 1);

    });

$(document).ready(function(){
        
        
             $(".slide4").css("transform","translate(200px,0)");
        $(".slide4").css("opacity", 1);
        
       

    });

$(document).ready(function(){
   
        $(".slide5").css("transform","translate(200px,0)");
        $(".slide5").css("opacity", 1);

    });

$(document).ready(function(){
        
        $(".slide6").css("transform","translate(200px,0)");
        $(".slide6").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide7").css("transform","translate(200px,0)");
        $(".slide7").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide8").css("transform","translate(200px,0)");
        $(".slide8").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide9").css("transform","translate(200px,0)");
        $(".slide9").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide10").css("transform","translate(200px,0)");
        $(".slide10").css("opacity", 1);

    });
;
$(document).ready(function(){
    
        $(".slide11").css("transform","translate(200px,0)");
        $(".slide11").css("opacity", 1);

    });

// Sticky Header
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".top-nav").addClass("light-header");
    } else {
        $(".top-nav").removeClass("light-header");
    }
});

// Year for copy content
$(function(){
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});
</script>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
