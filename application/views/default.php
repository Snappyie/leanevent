<html lang="es">
<title>Inicio</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo-blanco.png" />
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
    <link rel="stylesheet" media="screen and (min-width: 601px)" type="text/css" href="css/leanevent.css">
    <meta name="viewport" content="width=device-width">
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<body onload="javascript:showSlides();showLogoSlides(1);">
    <?php 
        include('email.php');
        $emailError = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["newsletter_email"]) || !filter_var($_POST["newsletter_email"])){
                $emailError = "Please enter valid email.";
            } else {
                send_email($_POST["newsletter_email"]);
            }
        }
    ?>
    <div id="wrapper">
        <!-- Header -->
        <div class="header">
            <div id="navigation-container">
                <img class="logo-blanco" src="images/logo-blanco.png" height="50" width="50">
                <h1 class="head-label">LEANEVENTOS</h1>
                <ul class="nav-links">
                    <li class="nav-link nav-active"><a href="default.php">Inicio</a></li>
                    <li class="nav-link"><a href="aboutus.php">Quienes Somos</a></li>
                    <li class="nav-link"><a href="blog">Blog</a></li>
                    <li class="nav-link"><a href="register.php">Registrate</a></li>
                    <li class="nav-link"><a href="contactus.php">Contacto</a></li>
                    <li class="nav-link"><a href="login.php">Iniciar sesión</a></li>
                    <li class="nav-link"><a href="buy_from_us.php">Comprar Boletos</a></li>
                </ul>
            </div>
        </div>
        <!-- Carousel of banner images -->
        <div class="slideshow-container">
            <div class="carousel fade">
                <img src="images/bannerlean1.jpg" class="carousel_img">
                <div class="dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="carousel fade">
                <img src="images/bannerlean2.jpg" class="carousel_img">
                <div class="dots">
                    <span class="dot"></span>
                    <span class="dot active"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="carousel fade">
                <img src="images/bannerlean3.jpg" class="carousel_img">
                <div class="dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot active"></span>
                </div>
            </div>
        </div>
        <!-- Que Hacemos -->
        <div class="que_hacemos">
            <div class="line_div">
                <hr class="line">
            </div>
            <div class="line_div">
                <h1>¿QUÉ HACEMOS?</h1>
            </div>
            <div class="line_div">
                <hr class="line">
            </div>
        </div>
        <p class="home_data">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones
            concretas a nuestros conciudadanos<br />
            en Venezuela ante in grave escasez de medicinas e insumos medicos en que se encuentra el pais Nuestra misión
            consiste <br />
            en recolectar ayuda medicos sanitaria en delegaciones en España y, a través de agentes de transporte
            Ilevarios a Venezuela<br />
            para que otras asociaciones se encarguen de su distribución. De este manera aportamos nuestro granito de
            arena <br />
            ayudando a Ilevar, asistencia humanitaria a Venezuela. Sornos una asociación sin fines de lucro, dedicada a
            la defensa de <br />
            los, Derechos Humanos</p>
        <!-- Volunteers -->
        <div class="volunteers">
            <div class="spaced_data">
                <h1>478</h1>
                <h3>VOLUNTARIOS</h3>
            </div>
            <div class="spaced_data">
                <h1>60.000</h1>
                <h3>PERSONAS BENEFICIADAS</h3>
            </div>
            <div class="spaced_data">
                <h1>45</h1>
                <h3>ALIADOS</h3>
            </div>
        </div>
        <!-- banner -->
        <div class="quienes_somos">
            <div class="aboutbanner"></div>
            <p class="absolute-text"> <b> "La injusticia, en cualquier parte, es una amenaza a la justicia en todas
                    partes."</b></p>
            <p class="absolute-text-by"> <br> <i>Martin Luther King</i> </p>
        </div>
        <!-- Aliados -->
        <div class="aliados">
            <div class="line_div">
                <hr class="line">
            </div>
            <div class="line_div">
                <h1>ALIADOS</h1>
            </div>
            <div class="line_div">
                <hr class="line">
            </div>
        </div>
        <!-- Aliados Images -->
        <div class="slideshow-container-logo">
            <div class="mySlides fade">
                <img src="images/logo1.PNG">
                <img src="images/logo2.PNG">
                <img src="images/logo3.PNG">
                <img src="images/logo4.PNG">
            </div>
            <div class="mySlides fade">
                <img src="images/logo5.PNG">
                <img src="images/logo6.PNG">
                <img src="images/logo7.PNG">
                <img src="images/logo8.PNG">
            </div>
            <div class="prev-next-buttons">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <!-- Register to newsletter -->
        <div class="newsletter">
            <div class="newsletter_info">
                <img src="images/newsletter.png" alt="newsletter" width="30px" height="30px">
                <h2>Registrese para recibir un <br>boletín</h2>
            </div>
            <div class="newsletter_register">
                <form action="default.php" method="POST" onsubmit="return validateForm(this)">
                    <input type="email" placeholder="Introduce to correo electronico" class="newsletter_input" id="newsletter_email" name="newsletter_email" required>
                    <input type="submit" value="Suscribir" class="newsletter_button">
                    <span class="error-help" id="newsletter_email_error"><?php echo $emailError?></span>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Footer -->
        <div class="footer">
            <p><strong>LEAN EN LAS REDES SOCIALES</strong></p>
            <div class="social-networks">
                <a href="https://twitter.com/leanemergente">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/LeanAyudaHumanitaria/">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/leanayudahumanitaria/?hl=en">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <br>
            <br>
            <table class="footer-table">
                <tr>
                    <td class="blank-td"></td>
                    <td class="copyright">
                        <p>Copyright ©2019 All rights reserved | This website is made with ♡ by
                            <em>DiazApps</em>
                        </p>
                    </td>
                    <td>
                        <div class="top-arrow">
                            <a href="#">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div> <!-- Wrapper end -->
</body>
<script src="js/leanevent.js"></script>

</html>