<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/footer.css')}}">
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
</style>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <a href="{{ asset('starting')}}" class="logo me-auto"><img src="images/logo.png" alt="" class="img-fluid" id="imglogo"></a>
    <form class="d-flex">
      <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
      <button class="btn btn-primary text-center" type="submit">Consulter statut demande</button>
    </form>
  </div>
</nav>





<body>
    <form id="regForm" action="">
  <h1> Formulaire de demande</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Localité:
    <p><input placeholder="Votre localité..." oninput="this.className = ''" name="fname"></p>
    <!-- <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
  </div>
  <div class="tab"><span style="font-size: 25px; font: bold 7px;  text-decoration: underline;"> Informations personelles:</span>
     <p><label for="nom"> Nom:</label><input placeholder="Votre nom..." oninput="this.className = ''" name="nom"></p>
     <p> <label for="prenom"> Prénom:</label><input placeholder="Votre prénom..." oninput="this.className = ''" name="prenom"></p>
     <p><label for="naissance"> Date de Naissance:</label><input placeholder="Votre date de naissance..." oninput="this.className = ''" name="naissance" type="date"></p>
     </div>
  <div class="tab">Contact Info:
    <p> <label for="nom"> E-mail:</label><input placeholder="E-mail..." oninput="this.className = ''" name="email" type="mail"></p>
    <p> <label for="nom"> Téléphone:</label><input placeholder="Phone..." oninput="this.className = ''" name="phone" type="text"></p>
  </div>
   <!-- <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> -->
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>




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
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Demande de racccordement en ligne</a></li>
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



<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>