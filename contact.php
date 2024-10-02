<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <?php include("include/header.php"); ?>
    <!-- banner start -->
    <section class="banner-wrap banner-main-wrap">
        <div class="container">
            <div class="banner banner-main-main">
                <h1 class="h1">Contact Us</h1>
                <p class='banner-desc'>At Brownloop, Inc we understand that private equity (PE) firms need to make informed decisions based on data for both themselves and their portfolio companies.</p>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- contact-from-section start -->
    <section class="contact-form-wrap">
        <div class="container">
            <div class="contact-form">
                <form>
                    <div class="row form-fieldset">
                        <div class="col-md-6 form-field">
                            <label for="firstname" class="form-label">First Name*</label>
                            <input type="text" id='firstname' class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col-md-6 form-field">
                            <label for="lastname" class="form-label">Last Name*</label>
                            <input type="text" id='lastname' class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="row form-fieldset ">
                        <div class="col-md-6 form-field">
                            <label for="emailAddress" class="form-label">Email*</label>
                            <input type="text" id='emailAddress' class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-6 form-field">
                            <label for="phone" class="form-label">Phone Number*</label>
                            <input type="text" id='phone' class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="textarea" class="form-label">Message</label>
                        <textarea class="form-control" id="textarea" rows="3" placeholder="Type your message"></textarea>
                    </div>
                    <button type="submit" class="cta-form-btn">Send Message</button>
                </form>

            </div>
        </div>
    </section>
    <!-- contact-from-section end -->

    <!-- contact-info-section start -->
    <section class="contact-info-wrap">
        <div class="container">
            <div class="contact-info">
                <div class="section-top">
                    <div class="section-text">
                        <div class="section-title">contact info</div>
                        <h3 class="h3">Get in touch with Brownloop</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class='contact-map'>
                            <iframe src="https://www.google.com/maps/embed" width="843" height="484"></iframe>

                        </div>
                    </div>
                    <div class="col-md-4 contact-details-info">
                        <div class="contact-details">
                            <div class="contact-type">
                                <div class="contact-name">address</div>
                                <a class='contact-address' href="https://www.google.com/maps/place/Servcorp+-+Coworking,+Office+Suites+%26+Virtual+Offices/@40.7130082,-74.0157438,17z/data=!3m1!4b1!4m6!3m5!1s0x89c259cb6314597d:0x264792176ff7aa47!8m2!3d40.7130082!4d-74.0131689!16s%2Fg%2F11h1330j1v?entry=ttu&g_ep=EgoyMDI0MDkxNS4wIKXMDSoASAFQAw%3D%3D" target="_self">
                                    One World Trade Center Suite #8500 New York NY 10007
                                </a>
                            </div>
                            <div class="contact-type">
                                <div class="contact-name">email address</div>
                                <a href="mailto:info@brownloop.com" target="_self">
                                    info@brownloop.com
                                </a>
                            </div>

                            <div class="contact-type">
                                <div class="contact-name">phone</div>
                                <a href="tel: +1(732)479-6300" target="_self">
                                    +1 (732) 479-6300
                                </a>
                            </div>


                            <ul class="social-media-listing">
                                <li>
                                    <a href='linkedin.com' target='_blank'>
                                        <img src='./images/linedin.svg' alt='linkedin' width='24' height='24' />
                                    </a>
                                </li>
                                <li>
                                    <a href='twitter.com' target='_blank'>
                                        <img src='./images/twitter.svg' alt='twitter' width='24' height='24' />
                                    </a>
                                </li>
                                <li>
                                    <a href='facebook.com' target='_blank'>
                                        <img src='./images/facebook.svg' alt='facebook' width='24' height='24' />
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->

    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>