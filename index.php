<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet"/>

 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 
</head>
<body>
  <div class="header" id="topheader">
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container  text-uppercase">

    <div id="logo" class="pull-left">
  <a class="navbar-brand font-weight-bold text-white" href="#"><img src="images/" >JANMDATRI</a>
   
            </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appoint.php">Doctors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chat.php">Ask Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="patient.php">My Bookings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Pharmacy</a>
      </li>
    </ul>
    <li class="nav-item">
              <?php
              if(isset($_SESSION['user_name'])){ ?>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">logout <?php echo $_SESSION['user_name'];?></a></button>
               <?php } else {?>
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.php">login</a></button>
                 <?php }?>
    </li>
  
  </div>
</div>
</nav>
 </div>
  
  <section id="intro">
   <div class="center-div">
    <h1 class="font-weight-bold">WE PROVIDE TOTAL 
   MEDICAL SOLUTIONS</h1>
    <p>Taking Care of your health.</p>
    <p> We are here for your care 24/7. Any help just call us. </p>
    
      <button><a href="example.php">Search According to Symptom</a></button>
    </div>
  </div>
  </section>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/balance (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Take proper Balanced Diet</h3>
        <p>To stay mentally and physically healthy</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/balance (5).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Do proper EXERCISE and YOGA</h3>
        <p>To stay mentally and physically fit</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/balance (2).jpg" class="d-block w-100" alt="...">
      <h3>Daily Good Habits</h3>
        <p>To stay mentally and physically fit</p>
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
  </section>
  <section class="pricing" id="pricingdiv">
    <div class="container headings text-center">
      <h2 class="text-center font-weight-bold text-white pt-4">3 steps for better health</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="card">
  <div class="card-header">CHECKUP</div>
  <div class="card-body">
   <p> 1.</p>
    <p>Get a full body checkup. It is an important step in preventing bigger health issues. Your doctor can evaluate your state of wellbeing and diagnose any potential problems that may be in their beginning stages.</p>
  </div>
  <div class="card-footer">
    <a href="#">Read More</a>
  </div>
</div>

        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
  <div class="card-header">DOCTOR</div>
  <div class="card-body">
   <p> 2.</p>
    <p>Connect with a doctor. When you see your doctor regularly, they are able to detect health conditions or diseases early. By getting the correct health services,and treatment you are taking important steps toward living a longer, healthier life.</p>
  </div>
  <div class="card-footer">
    <a href="#">Read More</a>
  </div>
</div>

        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
  <div class="card-header">MEDICINE</div>
  <div class="card-body">
   <p> 3.</p>
    <p>Order Medicine. Be assured that you will always receive genuine brands and medicines from authorized distribution partners.Get your prescription medicines conveniently delivered right at your doorstep.</p>
  </div>
  <div class="card-footer">
    <a href="#">Read More</a>
  </div>
</div>

        </div>
  </section>

  <section id="aboutus">
    <div class="container">
      
        
          <h2 class="text-center">Schemes for healthcare of women in India</h2>
          <p>The Government of India is aware of the health status of women in the country. However, since public health is a state subject, Government Of India has been providing financial and technical support to the States/UTs for implementing various targeted health interventions through the following Programmes</p>

          <p>1.  Reproductive and Child Health Programme Phase I (RCH-I) during 1997 to 2005.</p>

 

<p>2. Reproductive and Child Health Programme Phase II (RCH-II) under National Rural Health Mission (NRHM) during 2005 to 2010.</p>

 

 <p>3.  Reproductive, Maternal, Neo-natal, Child Health + Adolescent Health (RMNCH+A) approach under National Health Mission from 2013 onwards.</p>

 <button><a href="">Read More</a></button>
        </div>
      </div>
    
  </section>
  <section class="my-5" id="service">
    <div class="py-5">
      <h2 class="text-center">What Services We Offer</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/service3.jpg" class="img-fluid aboutimg px-5">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      
      <p class="py-3 pr-5"><h4>A dependable, compassionate presence you can trust. This website contains a detail description about the 
      schemes provided by the government which eventually extends financial support to the remote womens.
        Our website also reduces the large number of steps required in fetching appointments of the doctors.
        House-makers, working women or women living in remote section can take benifits of this website.</h4>


        
      </p>


    </div>
  </div>
  </div>

    
  </section>

<section class="happyclients">
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold">CONTACT US</h1>
    <p class="text-capitalize pt-1">We're Here to Help and answer any Question you might have.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
        
            <form action="contact.php" method="post">
  <div class="form-group">
    
    <input type="text" class="form-control" placeholder="Enter username" id="username" name="uname"required autocomplete="off">
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email"required autocomplete="off">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter number" id="mobile" name="cno"required autocomplete="off">
  </div>
  <div class="form-group">
    
    <textarea class="form-control" rows="4" id="comment" placeholder="Enter your comments"name="message"></textarea>
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</section>
<br><br>
<section id="footer">
     <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Birsa Institute Of Technology, Sindri</strong>.
            </div>
            <div class="credits">
                Designed by <a href="#" >SWETA SINGH</a>
                <!-- Trigger the modal with a button -->
                <a style="display:block;"  data-toggle="modal" data-target="#myModal">Privacy Policy</a> 

</div>
</div>
</section>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>