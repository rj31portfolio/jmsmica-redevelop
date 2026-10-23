<?php
// Page-specific SEO: edit these values for this page.
$pageTitle = 'Major Clients | JMSMICA';
$metaDescription = 'Explore the major clients of JMSMICA Enterprises and our industrial mineral supply relationships.';
$metaKeywords = 'Major Clients, JMSMICA Enterprises, industrial minerals';
require __DIR__ . '/include/header.php';
?>
<section class="page-title" style="background-image:url(images/about1.jpg)">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Major Clients</li>
        </ul>
        <h1>Major Clients</h1>
    </div>
</section>

<section class="client1">
    <div class="container">
        <div class="row">
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="client3"> Major Clients </h2>
                <p>Our company is proud to associate with below listed clients:&nbsp;</p>

                <ul class='client2'>
                    <li>Delmon - National Factory, Saudi Arabia</li>
                    <li>Dongguan City Non, China</li>
                    <li>VPI Mica, China</li>
                    <li>GIE, Oman</li>
                    <li>Delmon, Saudi Arabia</li>
                    <li>Mitsuwatech Co Ltd , Japan</li>
                    <li>Wudao international Co Ltd China</li>
                    <li>Startdust Israel</li>
                    <li>SHIJIAZHUANG QINMING BLDG MTRLS CO LTD</li>
                </ul>
            </div>
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar market-sidebar">
                    <div class="sidebar-title">
                        <h2>Industrial Minerals Products</h2>
                    </div>
                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <ul class="blog-cat">
                            <li><a href='potassium-feldspar-powder-manufacture-in-india.php'>Potassium Feldspar Powder</a></li>
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
                    </div>
                    <div class="sidebar-title">
                        <h2>Enquiry Now</h2>
                    </div>
                    <form action="mail.php" method="POST" data-enquiry-form class="form2">
                        <input type="text" name="name" placeholder="Enter Name" required="" maxlength="150" autocomplete="name">
                        <input type="tel" name="phone" placeholder="Enter Number" required="" minlength="7" maxlength="25" pattern="[+0-9\(\) .\-]{7,25}" autocomplete="tel">
                        <textarea name="message" placeholder="Your Message" rows="3" required="" maxlength="5000"></textarea>
                        <button type="submit" name="btn_enq">Submit</button>
                        <?php require __DIR__ . '/include/enquiry-fields.php'; ?>
                    </form>
                </aside>
            </div>
        </div>
    </div>
    </div>
</section>

<?php require __DIR__ . '/include/footer.php'; ?>