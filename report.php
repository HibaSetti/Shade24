<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/db5a3da844.js" crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet">
  
  <title>Schade 24 | Report Damage</title>
</head>
<body class="report">
  <header>
  <?php include('navigation.php'); ?>
    <section class="One">
      <div class="container row">
        <div class="left-block col-md-6">
          <h1>
            Report damage
          </h1>
        </div>
          <div class="right-block col-md-6">
          <img src="images/report_damage.svg" />
          </div>
      </div>
    </section>
</header>
<div class="cb"></div>
<section class="shadow Two">
  <div class="container row">
    <h1>Claim form</h1>
     
  </div>
</section>
<section class="Three">
  <div class="container row">
    <h1>Steps to follow</h1>
    <div class="row">
      <div class="col-md-7">
          <div class="shadow card text-white">
              <img class="card-img-top " src="images/time.svg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Within 24 hours</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis suscipit quasi inventore sunt modi eaque explicabo, 
                fugit vero ratione nemo maxime pariatur esse dolore.</p>
              </div>
           </div>
       </div>
    </div>
   <div class="row">
     <div class="col-md-7">
        <div class="shadow card text-white second">
          <img class="card-img-top " src="images/Group 39.svg" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Within 24 hours</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis suscipit quasi inventore sunt modi eaque explicabo, 
                  fugit vero ratione nemo maxime pariatur esse dolore.</p>  
            </div>
        </div>
     </div>
   </div>
    <div class="row">
      <div class="col-md-7">
          <div class="shadow card text-white third">
              <img class="card-img-top " src="images/Group 40.svg" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Within 24 hours</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis suscipit quasi inventore sunt modi eaque explicabo, 
                fugit vero ratione nemo maxime pariatur esse dolore.</p> 
              </div>
            </div>
      </div>
    </div>

  
  </div>
</section>


<section class="shadow testimony">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                <p class="overview"><b>Paula Wilson</b></p>
              </div>
              <div class="carousel-item">
                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                <p class="overview"><b>Antonio Moreno</b></p>
              </div>
              <div class="carousel-item">
                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                <p class="overview"><b>Michael Holz</</p>
              </div>
                 <div class="quote">
                    <img src="images/green-quotes.png" />
                   </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          
          </div>
         
        </div>
      </div>
     
    </div>
</section>

<?php include('footer.php'); ?>
</body>
</html>