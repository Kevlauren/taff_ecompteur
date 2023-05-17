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
</head>
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


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1> Société Béninoise de l'<span>é</span>nergie <span>é</span>lectrique</h1>
                    <h2>Depuis plus de 40 ans, la SBEE se distingue par son expertise en Production d'Electricité, Distribution d'Electricité, Eclairage public...</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!-- <a href="#about" class="btn-get-started scrollto"> Faire une demande</a> -->
                        <a href="{{route('forms.index')}}" class="btn btn-success scrollto"> Faire une demande</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="images/compteur.png" class="img-fluid animated" alt="" style="height: 400px;">
                </div>
            </div> 
        </div>

    </section><!-- End Hero -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>A propos</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p class="text-black fw-bold text-decoration-underline">
                        Conditions générales d’Abonnement pour la fourniture
                        d’électricité
                    </p>
                    <strong style="text-decoration: underline;">Article 1er</strong>: Objet et dispositions générales
                    Le Contrat d’Abonnement définit les modalités de vente de l’électricité par la SBEE.
                    Les présentes Conditions Générales de vente de l’Electricité sont établies
                    conformément aux textes législatifs et réglementaires en vigueur, aux dispositions du
                    Contrat de concession entre la République du Bénin et la SBEE, au Cahier des
                    Charges, au présent Règlement de service et le Code réseau.
                    <!-- <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul> -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <strong style="text-decoration: underline;">Article 2</strong>: Raccordement et Branchements :
                    Les branchements sont installés dans les conditions définies par le Règlement de
                    Service et font partie intégrante du réseau public de distribution de l'énergie électrique.
                    Ils sont entretenus et renouvelés par la SBEE moyennant les redevances prévues à
                    l'Annexe I « Couts et Financements des prestations ».
                    Les propriétaires d'immeubles ne peuvent s'opposer ni à l'exécution des travaux
                    d'entretien, de réparation ou de remplacement des branchements...
                    <a href="/download" class="btn-learn-more">Télécharger le document </a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->






    <!-- ======= Contact Section ======= -->
    {{-- <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p> Contacter la SBEE à n'importe quel moment soit par téléphone, par mail ou en venant dans l'une de nos agences les plus proches de chez vous.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>01 BP 123 Cotonou
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@sbee.bj</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Téléphone:</h4>
                            <p>21 30 76 00</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nom & Prénoms</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Votre mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Objet</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer le message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section --> --}}






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













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>