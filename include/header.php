<?php
require __DIR__ . '/config.php';
require_once __DIR__ . '/form-security.php';

if ($homePageOnly && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') !== realpath(__DIR__ . '/../index.php')) {
    header('Location: index.php', true, 302);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($metaKeywords, ENT_QUOTES, 'UTF-8') ?>">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/design-refresh.css?v=4">
    <link rel="shortcut icon" href="index.php" type="image/x-icon">
    <link rel="icon" href="index.php" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Translate - International Languages -->
<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        autoDisplay: false
    }, 'google_translate_element');
}
</script>

<script
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</head>

<body>

    <div class="page-wrapper">

        <header class="main-header">
<div id="google_translate_element"></div>
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-outer clearfix">

                        <div class="top-left">
                            <ul class="links clearfix">
                                <li><a href="#"><span class="icon flaticon-placeholder-2"></span>295, 1st Floor, B-1,
                                        Pocket 1, Sector 17, Rohini, Delhi, 110089</a></li>
                                <li><a href="tel:+91-9910203483"><span class="icon fa fa-phone"></span>
                                        +91-9910203483</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul class="social-icon-one">
                                <li><a href="https://www.facebook.com/jmsmicaenterprises" target="_blank"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li><a href="https://in.pinterest.com/jmsmicaindia/" target="_blank"><span
                                            class="fa fa-pinterest"></span></a></li>
                                <li><a href="https://twitter.com/jmsmicaindia" target="_blank"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li><a href="https://www.instagram.com/jmsmicaenterprises/" target="_blank"><span
                                            class="fa fa-instagram"></span></a></li>
                                <li><a href="https://www.linkedin.com/in/jmsmicaenterprises/" target="_blank"><span
                                            class="fa fa-linkedin"></span></a></li>
                                <li><a href="https://www.youtube.com/@JMSMICA" target="_blank"><span
                                            class="fa fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">

                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="images/site-logo.png"
                                        alt="JMSMICA Enterprises"></a></div>
                        </div>

                        <div class="nav-outer clearfix">

                            <nav class="main-menu" aria-label="Main navigation">
                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#main-navigation" aria-controls="main-navigation"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="main-navigation">
                                    <ul class="navigation clearfix">
                                        <li><a href='index.php'>Home</a></li>
                                        <li><a href='about-us.php'>About Us</a></li>
                                        <li class='dropdown'><a href='#'>Industrial Minerals Products</a>
                                            <ul>
                                                <li><a href='potassium-feldspar-powder-manufacture-in-india.php'>Potassium Feldspar
                                                        Powder</a></li>
                                                <li class='dropdown'><a href='mica-manufacture-in-india.php'>Mica</a>
                                                    <ul>
                                                        <li><a href='mica-fine-manufacture-in-india.php'>Mica fine</a></li>
                                                        <li><a href='mica-coarse-manufacture-in-india.php'>Mica Coarse</a></li>
                                                        <li><a href='ruby-mica-manufacture-in-india.php'>Ruby Mica</a></li>
                                                        <li><a href='mica-powder-manufacture-in-india.php'>Mica Powder</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='lumps-manufacture-in-india.php'>Lumps</a></li>
                                                <li><a href='silica-flour-manufacture-in-india.php'>Silica Flour</a></li>
                                                <li><a href='talc-powder-manufacture-in-india.php'>Talc Powder</a></li>
                                                <li><a href='soap-stone-powder-manufacture-in-india.php'>Soap Stone Powder</a></li>
                                                <li><a href='dolomite-powder-manufacture-in-india.php'>Dolomite Powder</a></li>
                                                <li class='dropdown'><a href='bentonite-powder-manufacture-in-india.php'>Bentonite Powder</a>
                                                    <ul>
                                                        <li><a href='ocma-grade-manufacture-in-india.php'>OCMA Grade</a></li>
                                                        <li><a href='api-grade-manufacture-in-india.php'>API Grade</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='kaolin-powder-manufacture-in-india.php'>Kaolin Powder</a></li>
                                                <li><a href='quartz-silica-manufacture-in-india.php'>Quartz Silica</a></li>
                                            </ul>
                                        </li>
                                        <li><a href='photo-gallery.php'>Photo Gallery</a></li>
                                        <li><a href='our-clients.php'>Major Clients</a></li>
                                        <li><a href='our-certificates.php'>Our Certificates</a></li>
                                        <!-- <li><a href='blogs.php'>Our Blogs</a></li> -->
                                        <li><a href='contact-us.php'>Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>

                            <div class="outer-box">
                                <a href="contact-us.php" class="theme-btn quote-btn">Send Inquiry</a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="sticky-header">
                <div class="auto-container">

                    <div class="outer-container clearfix">
                        <div class="logo-box pull-left">
                            <div class="logo logo11"><a href="index.php"><img src="images/site-logo.png"
                                        alt="JMSMICA Enterprises"></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <nav class="main-menu" aria-label="Sticky navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#sticky-navigation" aria-controls="sticky-navigation"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="sticky-navigation">
                                    <ul class="navigation clearfix">
                                        <li><a href='index.php'>Home</a></li>
                                        <li><a href='about-us.php'>About Us</a></li>
                                        <li class='dropdown'><a href='#'>Industrial Minerals Products</a>
                                            <ul>
                                                <li><a href='potassium-feldspar-powder-manufacture-in-india.php'>Potassium Feldspar
                                                        Powder</a></li>
                                                <li><a href='mica-manufacture-in-india.php'>Mica</a></li>
                                                <li><a href='lumps-manufacture-in-india.php'>Lumps</a></li>
                                                <li><a href='silica-flour-manufacture-in-india.php'>Silica Flour</a></li>
                                                <li><a href='talc-powder-manufacture-in-india.php'>Talc Powder</a></li>
                                                <li><a href='soap-stone-powder-manufacture-in-india.php'>Soap Stone Powder</a></li>
                                                <li><a href='dolomite-powder-manufacture-in-india.php'>Dolomite Powder</a></li>
                                                <li><a href='bentonite-powder-manufacture-in-india.php'>Bentonite Powder</a></li>
                                                <li><a href='kaolin-powder-manufacture-in-india.php'>Kaolin Powder</a></li>
                                                <li><a href='quartz-silica-manufacture-in-india.php'>Quartz Silica</a></li>
                                            </ul>
                                        </li>
                                        <li><a href='photo-gallery.php'>Photo Gallery</a></li>
                                        <li><a href='our-clients.php'>Major Clients</a></li>
                                        <li><a href='our-certificates.php'>Our Certificates</a></li>
                                        <!-- <li><a href='blogs.php'>Our Blogs</a></li> -->
                                        <li><a href='contact-us.php'>Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>

                        </div>

                    </div>

                </div>
            </div>

        </header>
