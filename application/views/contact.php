
<!DOCTYPE html>
<html lang="zxx">
  <?php $this->load->view('headerCss');?>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sub-loader"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Header -->
       <?php $this->load->view('header');?>
        <!-- End Header -->

        <!-- Navbar -->
        <div class="navbar-area sticky-top"> 
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
           <?php $this->load->view('menu');?>
        <!-- End Navbar -->

        <!-- Page Title -->
        <div class="page-title-area title-img-one">
            <div class="title-shape">
                <img src="<?php echo base_url();?>assets/images/page-title/title-shape.jpg" alt="Title">
                <img src="<?php echo base_url();?>assets/images/banner/banner-shape2.png" alt="Title">
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">

                        <div class="title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Contact</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <div class="contact-area pt-100 pb-70">
            <div class="contact-shape">
                <img src="<?php echo base_url();?>assets/images/donate-shape2.png" alt="Shape">
            </div>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Contact</span>
                    <h2>Get In Touch</h2>
                </div>
                <div class="row">

                    <div class="col-lg-8">
                        <form id="contactForm">
                            <div class="row">
        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Please enter your number" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Accept <a href="terms-conditions.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="btn common-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="contact-info">
                            <div class="inner">
                                <h3>Contact Info</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit</p>
                                <ul>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a href="#">113 Pily, White House, New Jersey, USA</a>
                                    </li>
                                    <li>
                                        <i class="icofont-ui-call"></i>
                                        <a href="tel:+0015481592491">+001-548-159-2491</a>
                                        <a href="tel:+0126584895236">+012-658-489-5236</a>
                                    </li>
                                    <li>
                                        <i class="icofont-paper-plane"></i>
                                        <a href="mailto:hello@pily.com">hello@pily.com</a>
                                        <a href="mailto:info@pily.com">info@pily.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area pb-100">
            <div class="container p-0">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1605092923871!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- End Map -->

        <!-- Footer -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a class="logo" href="index.html">
                                    <img src="<?php echo base_url();?>assets/images/logo-three.png" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur asperiores temporibus.</p>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="icofont-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-contact">
                                <h3>Contact Info</h3>
                                <p>Grursus mal suada faci Lorem to the ipsum dolarorit</p>
                                <ul>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a href="#">113 Pily, White House, New Jersey, USA</a>
                                    </li>
                                    <li>
                                        <i class="icofont-ui-call"></i>
                                        <a href="tel:+0015481592491">+001-548-159-2491</a>
                                        <a href="tel:+1256548566523">+125-654-856-6523</a>
                                    </li>
                                    <li>
                                        <i class="icofont-paper-plane"></i>
                                        <a href="#mailto:hello@pily.com">hello@pily.com</a>
                                        <a href="#mailto:info@pily.com">info@pily.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-link">
                                <h3>Important Link</h3>
                                <ul>
                                    <li>
                                        <a href="about.html">
                                            <i class="icofont-simple-right"></i>About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="events.html">
                                            <i class="icofont-simple-right"></i>
                                            Events
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <i class="icofont-simple-right"></i>
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <i class="icofont-simple-right"></i>
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="donation.html">
                                            <i class="icofont-simple-right"></i>
                                            Donation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">
                                            <i class="icofont-simple-right"></i>
                                            Privacy Policy
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-events">
                                <h3>Recent Events</h3>
                                <div class="footer-events-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="<?php echo base_url();?>assets/images/footer-events1.jpg" alt="Events">
                                            <span>16 Nov</span>
                                        </li>
                                        <li>
                                            <a href="events.html">Protest Against Of The Black Community</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-events-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="<?php echo base_url();?>assets/images/footer-events2.jpg" alt="Events">
                                            <span>17 Nov</span>
                                        </li>
                                        <li>
                                            <a href="events.html">Media Coverage Of The Protesting Event</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-events-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="<?php echo base_url();?>assets/images/footer-events3.jpg" alt="Events">
                                            <span>18 Nov</span>
                                        </li>
                                        <li>
                                            <a href="events.html">Protest Against Inhuman Activities In City</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p>Copyright @2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                </div>
            </div>

        </footer>
        <!-- End Footer -->

        <!-- Go Top -->
        <div class="go-top">
            <i class="icofont-polygonal"></i>
            <i class="icofont-polygonal"></i>
        </div>
        <!-- End Go Top -->


        <!-- Essential JS -->
       <?php $this->load->view('footerJs');?>
    </body>
</html>