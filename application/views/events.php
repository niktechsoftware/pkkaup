
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
                            <h2>Events</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Events</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Events -->
        <div class="events-area-three pt-100 pb-70">
            <div class="events-shape">
                <img src="<?php echo base_url();?>assets/images/donate-shape2.png" alt="Shape">
            </div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-9">
                        <div class="events-top">
                            <div class="events-heading">
                                <h2>Recent Events</h2>
                            </div>
                            <div class="events-item-two">
                                <ul class="main-divide align-items-center">
                                    <li>
                                        <img src="<?php echo base_url();?>assets/images/events/events1.jpg" alt="Events">
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="event-details.html">Protest Against Of The Black Community</a>
                                        </h3>
                                        <ul class="inner-divide">
                                            <li>    
                                                <i class="icofont-calendar"></i>
                                                <span>20 Oct, 2020, Wednesday</span>
                                            </li>
                                            <li>    
                                                <i class="icofont-location-pin"></i>
                                                <a href="#">113 Pily, White House, New Jersey, USA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="common-btn default" href="event-details.html">
                                            View Event Details
                                        </a>
                                        <a class="common-btn" href="#">
                                            Buy Ticket
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="events-item-two">
                                <ul class="main-divide align-items-center">
                                    <li>
                                        <img src="<?php echo base_url();?>assets/images/events/events2.jpg" alt="Events">
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="event-details.html">Media Coverage Of The Protesting Event With Dignity</a>
                                        </h3>
                                        <ul class="inner-divide">
                                            <li>    
                                                <i class="icofont-calendar"></i>
                                                <span>21 Oct, 2020, Thursday</span>
                                            </li>
                                            <li>    
                                                <i class="icofont-location-pin"></i>
                                                <a href="#">114 Pily, White House, New Jersey, USA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="common-btn default" href="event-details.html">
                                            View Event Details
                                        </a>
                                        <a class="common-btn" href="#">
                                            Buy Ticket
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="events-item-two">
                                <ul class="main-divide align-items-center">
                                    <li>
                                        <img src="<?php echo base_url();?>assets/images/events/events3.jpg" alt="Events">
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="event-details.html">Protest Against Inhuman Activities In City</a>
                                        </h3>
                                        <ul class="inner-divide">
                                            <li>    
                                                <i class="icofont-calendar"></i>
                                                <span>22 Oct, 2020, Friday</span>
                                            </li>
                                            <li>    
                                                <i class="icofont-location-pin"></i>
                                                <a href="#">115 Pily, White House, New Jersey, USA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="common-btn default" href="event-details.html">
                                            View Event Details
                                        </a>
                                        <a class="common-btn disabled" href="#">
                                            Sold Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="events-bottom">
                            <div class="events-heading">
                                <h2>Closed Events</h2>
                            </div>
                            <div class="events-item-two">
                                <ul class="main-divide align-items-center">
                                    <li>
                                        <img src="<?php echo base_url();?>assets/images/events/events4.jpg" alt="Events">
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="event-details.html">Protest Against To Many Corruption The Capital</a>
                                        </h3>
                                        <ul class="inner-divide">
                                            <li>    
                                                <i class="icofont-calendar"></i>
                                                <span>23 Oct, 2020, Saturday</span>
                                            </li>
                                            <li>    
                                                <i class="icofont-location-pin"></i>
                                                <a href="#">116 Pily, White House, New Jersey, USA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="common-btn default" href="event-details.html">
                                            View Event Details
                                        </a>
                                        <a class="common-btn disabled" href="#">
                                            Closed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="events-item-two">
                                <ul class="main-divide align-items-center">
                                    <li>
                                        <img src="<?php echo base_url();?>assets/images/events/events5.jpg" alt="Events">
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="event-details.html">How Political Power Can Be Used As Strength</a>
                                        </h3>
                                        <ul class="inner-divide">
                                            <li>    
                                                <i class="icofont-calendar"></i>
                                                <span>24 Oct, 2020, Sunday</span>
                                            </li>
                                            <li>    
                                                <i class="icofont-location-pin"></i>
                                                <a href="#">117 Pily, White House, New Jersey, USA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="common-btn default" href="event-details.html">
                                            View Event Details
                                        </a>
                                        <a class="common-btn disabled" href="#">
                                            Closed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="events-item">
                            <img src="<?php echo base_url();?>assets/images/events/events-main2.jpg" alt="Events">
                            <div class="bottom">
                                <h3>
                                    <a href="event-details.html">Become A Proud Volunteer</a>
                                </h3>
                                <a class="common-btn" href="event-details.html">
                                    Join Now
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Events -->

        <!-- Subscribe -->
        <div class="subscribe-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="subscribe-content">
                            <h2>Stay Up-To-Date With Our Movements Get Subscribe!</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="subscribe-item">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
            
                                <button class="btn common-btn" type="submit">
                                    Subscribe Now
                                    <i class="icofont-long-arrow-right"></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Subscribe -->

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