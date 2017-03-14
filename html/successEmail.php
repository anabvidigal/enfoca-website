<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 13/03/2017
 * Time: 21:00
 */

if(isset($_POST['sendMessage'])){
    $message = $_POST['message'];
    $to = "contato@goenfoca.com.br";
    $subject = "Contato via Site - ENFOCA";
    $from = $_POST['email'];
    $body = '<h1>Olá, '.$_POST['name'].' enviou um e-mail</h1> <br />
        '.$message.'';
    $headers = "From: ". strip_tags($from) ."\r\n";
    $headers .= "Reply-To: ". strip_tags($from) ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to, $subject, $body, $headers); ?>
    <!DOCTYPE html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
        <title>Enfoca Chatbots</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700,800" rel="stylesheet">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/ionicons.css">
        <link rel="stylesheet" href="css/nivo-lightbox.css">
        <link rel="stylesheet" href="css/odometer-theme-minimal.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- themes -->
        <link rel="stylesheet" href="css/themes/blue.css" title="blue" media="screen">
        <link rel="stylesheet" href="css/themes/carrot.css" title="carrot" media="screen">
        <link rel="stylesheet" href="css/themes/dark.css" title="dark" media="screen">
        <link rel="stylesheet" href="css/themes/default.css" title="default" media="screen">
        <link rel="stylesheet" href="css/themes/summer.css" title="summer" media="screen">
        <link rel="stylesheet" href="css/themes/sunset.css" title="sunset" media="screen">
        <link rel="stylesheet" href="css/themes/winter.css" title="winter" media="screen">
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="90">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- < PRELOADER >..............
        ................................ -->
    <div class="page-loader">
        <div class="overlay overlay-5 alpha-9">
            <div class="container">
                <div class="intro">
                    <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                    <span class="p-p"></span>
                </div>
                <p>&copy; Enfoca 2017 | Todos os direitos reservados.</p>
            </div>
        </div>
    </div>

    <!-- < NAVIGATION >.............
    ................................ -->
    <nav class="navbar navbar-fixed-top main-navigation navbar-left nav-height" id="main-navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#main-header" class="navbar-brand">
                    <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                    <img class="logo-light" src="img/logo-light.png" alt="Logo da Enfoca" />
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <a href="#main-header" class="sidebar-brand">
                    <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                </a>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#download"><i class="ion-chatbox"></i>Sobre</a></li>
                    <li><a href="#features"><i class="ion-ios-gear"></i>Recursos</a></li>
                    <li><a href="#keynotes"><i class="ion-ios-pie"></i>Dashboard</a></li>
                    <!--
                    <li><a href="#faqs"><i class="ion-cash"></i>FAQs</a></li>
                    -->
                    <li><a href="#support"><i class="ion-ios-compose"></i>Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-wrapper">
        <!-- < MAIN CONTENT >...........
        ................................ -->
        <div class="content-wrapper">
            <!-- < HEADER >.................
        ................................ -->

            <section id="support">
                <div class="container no-padding-t">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mockup-wrapper mockup-top hidden-sm hidden-xs">
                                <figure class="mockup mockup-support">
                                    <img src="img/mockup/support.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <br>
                            <br>
                            <br>


                            <div class="area">
                                <!--
                                <h4 class="subheading text-uppercase">Enjoy with no worries</h4>
                                -->
                                <div class="alert alert-success alert-dismissible text-center" >
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <strong>Feito!</strong> e-mail enviado com sucesso! <a href="index.php">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="partners" class="scroll-rtl">
                <div class="container light quarter-padding text-center">
                    <h4>Nossos <span class="bold">parceiros</span></h4>
                    <div class="area row row-responsive">
                        <div class="col-md-2 col-xs-6"><figure class="partner-1"></figure></div>
                        <div class="col-md-2 col-xs-6"><figure class="partner-2"></figure></div>
                        <div class="col-md-2 col-xs-6"><figure class="partner-3"></figure></div>
                        <div class="col-md-2 col-xs-6"><figure class="partner-4"></figure></div>
                        <div class="col-md-2 col-xs-6"><figure class="partner-5"></figure></div>
                        <div class="col-md-2 col-xs-6"><figure class="partner-6"></figure></div>
                    </div>
                </div>
            </section>


            <footer id="site-footer" class="site-footer section parallax">

                <div class="footer-bottom text-center">
                    <div class="container">
                        <a target="_blank" href="https://www.facebook.com/GoEnfoca"><i class="ion-social-facebook"></i></a>
                        <p>&copy; Enfoca 2017 | Todos os direitos reservados.</p>
                        <a href="#main-header" class="scrollto">
                            <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="trial-request" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Start your free trial</h4>
                </div>
                <div class="modal-body">
                    <form id="form-trial" action="srv/trial-request.php" method="post" class="form form-trial" name="form-trial">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="email" name="TrialForm[email]" id="trial_email" class="form-control" placeholder="Valid email" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[firstName]" id="trial_first_name" class="form-control" placeholder="First name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[lastName]" id="trial_last_name" class="form-control" placeholder="Last name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[company]" id="trial_company" class="form-control" placeholder="Company name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[phone]" id="trial_phone" class="form-control" placeholder="Phone number" required>
                            </div>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="TrialForm[accept]" id="trial_accept">
                            <label for="trial_accept" class="control-label">I have read and accept terms and conditions</label>
                        </div>

                        <p><span class="bold">Note.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid iure magnam, minima placeat possimus provident quaerat repellat. Earum excepturi harum id omnis recusandae reprehenderit repudiandae sequi! Error, necessitatibus recusandae.</p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-accent modal-submit" data-target="#form-trial">Send Request</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.particleground.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/plugins/jquery.animatebar.min.js"></script>
    <script src="js/plugins/jquery.videoplayer.min.js"></script>
    <script src="js/main.js"></script>

    <script>

        $(window).on("scroll touchmove", function () {
            $('.navbar-brand').toggleClass('tiny', $(document).scrollTop() > 0);
            $('.nav-height').toggleClass('tiny-height', $(document).scrollTop() > 0);
        });


    </script>


    </body>
    </html>
<?php } else { ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title>Enfoca Chatbots</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/ionicons.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/odometer-theme-minimal.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- themes -->
    <link rel="stylesheet" href="css/themes/blue.css" title="blue" media="screen">
    <link rel="stylesheet" href="css/themes/carrot.css" title="carrot" media="screen">
    <link rel="stylesheet" href="css/themes/dark.css" title="dark" media="screen">
    <link rel="stylesheet" href="css/themes/default.css" title="default" media="screen">
    <link rel="stylesheet" href="css/themes/summer.css" title="summer" media="screen">
    <link rel="stylesheet" href="css/themes/sunset.css" title="sunset" media="screen">
    <link rel="stylesheet" href="css/themes/winter.css" title="winter" media="screen">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="90">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- < PRELOADER >..............
    ................................ -->
<div class="page-loader">
    <div class="overlay overlay-5 alpha-9">
        <div class="container">
            <div class="intro">
                <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                <span class="p-p"></span>
            </div>
            <p>&copy; Enfoca 2017 | Todos os direitos reservados.</p>
        </div>
    </div>
</div>

<!-- < NAVIGATION >.............
................................ -->
<nav class="navbar navbar-fixed-top main-navigation navbar-left nav-height" id="main-navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#main-header" class="navbar-brand">
                <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                <img class="logo-light" src="img/logo-light.png" alt="Logo da Enfoca" />
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <a href="#main-header" class="sidebar-brand">
                <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
            </a>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#download"><i class="ion-chatbox"></i>Sobre</a></li>
                <li><a href="#features"><i class="ion-ios-gear"></i>Recursos</a></li>
                <li><a href="#keynotes"><i class="ion-ios-pie"></i>Dashboard</a></li>
                <!--
                <li><a href="#faqs"><i class="ion-cash"></i>FAQs</a></li>
                -->
                <li><a href="#support"><i class="ion-ios-compose"></i>Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="page-wrapper">
    <!-- < MAIN CONTENT >...........
    ................................ -->
    <div class="content-wrapper">
        <!-- < HEADER >.................
    ................................ -->

        <section id="support">
            <div class="container no-padding-t">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mockup-wrapper mockup-top hidden-sm hidden-xs">
                            <figure class="mockup mockup-support">
                                <img src="img/mockup/support.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <br>
                        <br>
                        <br>


                        <div class="area">
                            <!--
                            <h4 class="subheading text-uppercase">Enjoy with no worries</h4>
                            -->
                            <div class="alert alert-danger alert-dismissible text-center" >
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Ooops!</strong> algo não está certo! Tente novamente! <a href="index.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="partners" class="scroll-rtl">
            <div class="container light quarter-padding text-center">
                <h4>Nossos <span class="bold">parceiros</span></h4>
                <div class="area row row-responsive">
                    <div class="col-md-2 col-xs-6"><figure class="partner-1"></figure></div>
                    <div class="col-md-2 col-xs-6"><figure class="partner-2"></figure></div>
                    <div class="col-md-2 col-xs-6"><figure class="partner-3"></figure></div>
                    <div class="col-md-2 col-xs-6"><figure class="partner-4"></figure></div>
                    <div class="col-md-2 col-xs-6"><figure class="partner-5"></figure></div>
                    <div class="col-md-2 col-xs-6"><figure class="partner-6"></figure></div>
                </div>
            </div>
        </section>


        <footer id="site-footer" class="site-footer section parallax">

            <div class="footer-bottom text-center">
                <div class="container">
                    <a target="_blank" href="https://www.facebook.com/GoEnfoca"><i class="ion-social-facebook"></i></a>
                    <p>&copy; Enfoca 2017 | Todos os direitos reservados.</p>
                    <a href="#main-header" class="scrollto">
                        <img class="logo" src="img/logo.png" alt="Logo da Enfoca" />
                    </a>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="trial-request" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Start your free trial</h4>
            </div>
            <div class="modal-body">
                <form id="form-trial" action="srv/trial-request.php" method="post" class="form form-trial" name="form-trial">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="email" name="TrialForm[email]" id="trial_email" class="form-control" placeholder="Valid email" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="TrialForm[firstName]" id="trial_first_name" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="TrialForm[lastName]" id="trial_last_name" class="form-control" placeholder="Last name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="TrialForm[company]" id="trial_company" class="form-control" placeholder="Company name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="TrialForm[phone]" id="trial_phone" class="form-control" placeholder="Phone number" required>
                        </div>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="TrialForm[accept]" id="trial_accept">
                        <label for="trial_accept" class="control-label">I have read and accept terms and conditions</label>
                    </div>

                    <p><span class="bold">Note.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid iure magnam, minima placeat possimus provident quaerat repellat. Earum excepturi harum id omnis recusandae reprehenderit repudiandae sequi! Error, necessitatibus recusandae.</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-accent modal-submit" data-target="#form-trial">Send Request</button>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.particleground.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/modernizr-2.8.3.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/odometer.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/plugins/jquery.animatebar.min.js"></script>
<script src="js/plugins/jquery.videoplayer.min.js"></script>
<script src="js/main.js"></script>

<script>

    $(window).on("scroll touchmove", function () {
        $('.navbar-brand').toggleClass('tiny', $(document).scrollTop() > 0);
        $('.nav-height').toggleClass('tiny-height', $(document).scrollTop() > 0);
    });


</script>


</body>
</html>
<?php } ?>