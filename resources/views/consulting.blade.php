<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: "roboto";
  font-weight: 500;
  font-size: 16px;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
  /* text-decoration: underline; */
  font-family: "roboto";
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: rockwell;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: "Jost", sans-serif;
  cursor: pointer;
}
button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
#imglogo{
    height:55px;
}

.navbar{
    background: #37517e;
}
body{
    background:  #b8b3b3;; 
}
/* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
</style>

<body>


  <header id="header" class="fixed-top" style="background-color: #37517e;">
    <div class="container d-flex align-items-center">
        <a href="{{ asset('starting')}}" class="logo me-auto"><img src="images/logo.png" alt="" class="img-fluid" id="imglogo"></a>


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                <li><a class="nav-link scrollto" href="#about" style="margin-left:40px;">A propos</a></li>
                <li><a class="nav-link scrollto" href="#contact" style="margin-left:40px;">Contact</a></li>
             <ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->




  <form id="regForm" action="">

    <h1>Consulter votre demande:</h1>
    
    <!-- One "tab" for each step in the form: -->
    <div class="">Numéro de la demande:
      <p><input placeholder="..." type="number"></p>
       </div>  
   
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="" onclick="" class="btn btn-success">Consulter</button>
       </div>
    </div>
    
  
    
    </form>
</body>




  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h4>Rejoignez la newsletter</h4>
            <p>Tapez votre mail ici</p>
            <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
        </div>
    </div>
</div>
</div> -->

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>SBEE</h3>
                    <p>
                        01 BP 123 Cotonou <br>
                        République du Bénin <br><br>
                        <strong>Téléphone:</strong> 21 30 76 00<br>
                        <strong>Email:</strong> info@sbee.bj<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Dashboard</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Demande de racccordement en
                                ligne</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                    </ul>
                </div>

                <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div> -->

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix" id="copyright-footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SBEE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
</footer><!-- End Footer -->












