<?php
// Page-specific SEO: edit these values for this page.
$pageTitle = 'Contact Us | JMSMICA';
$metaDescription = 'Contact JMSMICA Enterprises for industrial mineral enquiries, product information and supplier requirements.';
$metaKeywords = 'Contact Us, JMSMICA Enterprises, industrial minerals';
require __DIR__ . '/include/header.php';
?>
<section class="page-title" style="background-image:url(images/contact1.jpg)">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
        </ul>
        <h1>Contact Us</h1>
    </div>
</section>

<section class="contact1">
    <div class="container">
        <div class="row contact-details">
            <div class="col-lg-4 col-12 col-sm-6 col-md-4">
                <div class="phone1">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h6>Phone Number :</h6>
                    <p><a href='tel:+91-9910203483'>+91-9910203483</a></p>
                    <p><a href='tel:+91-1202571011'>+91-1202571011</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-12 col-sm-6 col-md-4">
                <div class="phone1">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h6>Email Address :</h6>
                    <p><a href="mailto:jmsmicabhilwara2010@gmail.com">jmsmicabhilwara2010@gmail.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-12 col-sm-6 col-md-4">
                <div class="phone1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h6>
                        Office Address</h6>
                    <p>295, 1st Floor, B-1, Pocket 1, Sector 17, Rohini, Delhi, 110089</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact1">
    <div class="container">
        <div class="row contact2">
            <div class="col-lg-7 col-12 col-sm-12 col-md-7">
                <form action="mail.php" method="POST" data-enquiry-form id="dreamit-form">
                    <div class="row">
                        <div class="section-title1 ">
                            <h4>CONTACT US</h4>

                        </div>
                        <div class="col-lg-6">
                            <div class="form_box mb-3">
                                <input class="form-control" type="text" name="name" placeholder="Enter Name" required="" maxlength="150" autocomplete="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form_box mb-3">
                                <input class="form-control" type="tel" name="phone" placeholder="Enter Number" required="" minlength="7" maxlength="25" pattern="[+0-9\(\) .\-]{7,25}" autocomplete="tel">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form_box">
                                <textarea name="message" placeholder="Your Message" rows="3" required="" maxlength="5000"></textarea>
                            </div>

                            <div class="quote_btn text_center  btn11">
                                <button class="btn" type="submit" name="btn_enq">Send Message</button>
                            </div>

                        </div>
                    </div>
                    <?php require __DIR__ . '/include/enquiry-fields.php'; ?>
                </form>
            </div>

            <div class="col-lg-5 col-12 col-sm-12 col-md-5 img1">
                <img src="images/contact.jpg" class="img-fluid">
            </div>

        </div>
    </div>
</section>

<section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27995.318831477845!2d77.23488378424425!3d28.7071455809095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdd620dac251%3A0x367da59a3701b399!2sJMSMICA!5e0!3m2!1sen!2sin!4v1695981349363!5m2!1sen!2sin"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php require __DIR__ . '/include/footer.php'; ?>