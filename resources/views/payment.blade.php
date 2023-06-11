<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="https://cdn.kkiapay.me/k.js"></script>
    <style>
        #imglogo {
            height: 4rem;
        }

        span {
            text-transform: uppercase;
        }

        nav {
            background: #37517e;
        }
    </style>
</head>
<body>
    <header id="header" class="fixed-top" style="background-color: #37517e;">
        <div class="container d-flex align-items-center">
            <a href="{{ asset('starting')}}" class="logo me-auto"><img src="images/logo.png" alt="" class="img-fluid" id="imglogo"></a>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="#about" style="margin-left:40px;">A propos</a></li>
                    <li><a class="nav-link scrollto" href="#contact" style="margin-left:40px;">Contact</a></li>
                    <a href="{{route('consult')}}" class="btn btn-primary text-center" style="margin-left:40px;">Consulter statut demande</a>
                    <ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <section class="" style="min-height: 350px;">

        {{-- Gars flemme de gérer style donc y aura juste un boutton san style --}}



    </section>


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

        // openKkiapayWidget({amount:'{{ $fee }}',position:"right",callback:'{{ $callback }}',
        //     data:""
        //     theme:"green",
        //     key:"18465e5428051c885eb5456663b63d8caa24ef19"
        // });

        // addSuccessListener(response => {
        //     console.log(response);
        // });

        // addFailedListener(error => {
        //     console.log(error);
        // });

    </script>

{{-- <kkiapay-widget amount="<montant-a-preleve-chez-le-client>"
    key="766aae30e42111edbc3a9963ea980b02"
    url="/"
    position="center"
    sandbox="true"
    data=""
    callback="/"/> --}}

    <kkiapay-widget
                 amount="10000" 
                 position="center"
                 sandbox= "true" 
                 data= "" 
                 key="766aae30e42111edbc3a9963ea980b02" 
                 03callback="https://kkiapay-redirect.com"
                 url="/"
                  />









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
