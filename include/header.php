<!-- header start -->
<section class="header-wrap header-active">
    <header>
        <div class="header-left">
            <a href='#' target='_self'>
                <img src='./images/logo.png' alt='main-logo' width='271' height='20' />
            </a>
        </div>
        <div class="header-right">
            <ul class="header-menu-listing">
                <li><a href='index.php' target='_self'>Home</a></li>
                <li><a href='meet-team.php' target='_self'>Company</a></li>
                <li><a href='#' target='_self'>Business Cloud</a></li>
                <li><a href='solutions.php' target='_self'>Solutions</a></li>
                <li><a href='#' target='_self'>Services</a></li>
                <li><a href='#' target='_self'>Resources</a></li>
                <li><a href='#' target='_self'>Careers</a></li>
                <li><a href='contact.php' target='_self'>Contact</a></li>
            </ul>
            <div class="cta-btn btn-sm">
                <a href='#' target='_self' data-bs-toggle="modal" data-bs-target="#modalForm">
                    Free Demo
                </a>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="openbutton ">
                <img src="./images/blackicon.jpg" alt="black-popup-open" height="24" width="40">
            </div>
            <div class="closebutton">
                <img src="./images/closeblack.png" alt="close-black-menu" height="24" width="40">
            </div>
        </div>

    </header>

    <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Request a Demo</h3>
                    <div class="modal-close-wrap">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="row modal-fieldset">
                            <div class="col">
                                <label for="first-name" class="form-label">Person Name*</label>
                                <input type="text" id='full-name' class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col">
                                <label for="last-name" class="form-label">Company Name*</label>
                                <input type="text" id='company-name' class="form-control" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="row modal-fieldset">
                            <div class="col">
                                <label for="position" class="form-label">Email*</label>
                                <input type="email" id='postion' class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="col">
                                <label for="phone-number" class="form-label">Phone*</label>
                                <input type="number" id='phone-number' class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="row modal-fieldset">
                            <div class="col">
                                <label for="date" class="form-label">Preferred Date & Time*</label>
                                <input type="date" id='date' class="form-control" placeholder="Select Date and Time">
                            </div>
                        </div>
                        <div class="col modal-fieldset">
                            <label for="textarea" class="form-label">Message</label>
                            <textarea class="form-control" id="textarea" rows="3" placeholder="Type your message"></textarea>
                        </div>
                        <div class="col-12 modal-btn">
                            <button class='cta-form-btn' type="submit">Get Free Demo</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- header end -->