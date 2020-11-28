
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
                            <h2>About Us</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>About Us</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About -->
        <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title">About The Leader</span>
                                <h2>Meet The Leader Of The Future <span>Henry James Parker</span></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                            </div>
                            <ul class="align-items-center">
                                <li>
                                    <img src="<?php echo base_url();?>assets/images/signature.png" alt="Signature">
                                </li>
                                <li>
                                    <h3>Henry James</h3>
                                    <span>Chairman, Pily</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/images/leader.jpg" alt="About">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Mission -->
        <section class="mission-area pt-100 pb-70">
            <div class="mission-shape">
                <img src="<?php echo base_url();?>assets/images/fl.jpg" alt="Mission">
            </div>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Mission & Vision</span>
                    <h2>Our Mission & Vision</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-lg-4">
                        <div class="mission-item">
                            <img src="<?php echo base_url();?>assets/images/mission/mission1.jpg" alt="Mission">
                            <div class="bottom">
                                <h3>
                                    <a href="mission-details.html">Give People The Top Priority</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                <a class="common-btn" href="mission-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="mission-item">
                            <img src="<?php echo base_url();?>assets/images/mission/mission2.jpg" alt="Mission">
                            <div class="bottom">
                                <h3>
                                    <a href="mission-details.html">Build A Strong Country</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                <a class="common-btn" href="mission-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="mission-item">
                            <img src="<?php echo base_url();?>assets/images/peace.jpg" style="height:210px; width:350px;" alt="Mission">
                            <div class="bottom">
                                <h3>
                                    <a href="mission-details.html">Achieve Peacefulness</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                <a class="common-btn" href="mission-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Mission -->

        <!-- Ideology -->
        <section class="ideology-area two pt-100 pb-70">
            <div class="container">
                <div class="section-title two">
                    <span class="sub-title">Our Ideology</span>
                    <h2>We Walk Through Our Ideology</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-lg-4">
                        <div class="ideology-item">
                            <img src="<?php echo base_url();?>/assets/images/strong.jpg" alt="Ideology">
                            <div class="bottom">
                                <h3>Build Strong Country</h3>
                            </div>
                        </div>  
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="ideology-item">
                            <img src="<?php echo base_url();?>/assets/images/gov.png" alt="Ideology">
                            <div class="bottom">
                                <h3>Fair Governance</h3>
                            </div>
                        </div>  
                    </div>

                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="ideology-item">
                            <img src="<?php echo base_url();?>/assets/images/unity.jpg" style="height:260px;" alt="Ideology">
                            <div class="bottom">
                                <h3>Build Strong Community</h3>
                            </div>
                        </div>  
                    </div>

                </div>
            </div>
        </section>
        <!-- End Ideology -->

        <!-- Team -->
        <section class="team-area two pb-100">
            <div class="team-shape">
                <img src="<?php echo base_url();?>assets/images/fl.jpg" alt="Shape">
            </div>
            <div class="container">
                <div class="section-title two">
                    <span class="sub-title">Volunteers</span>
                    <h2>Our Successful Volunteers</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                </div>
                <div class="team-slider owl-theme owl-carousel">

                    <div class="team-item">
                        <div class="top">
                            <img src="<?php echo base_url();?>assets/images/team/team1.jpg" alt="Team">
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
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Jane Ronan</h3>
                            <span>Campaign Influencer</span>
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="<?php echo base_url();?>assets/images/team/team2.jpg" alt="Team">
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
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Tom Henry</h3>
                            <span>Donation Collector</span>
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
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
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Erif Ertan</h3>
                            <span>Donation Collector</span>
                        </div>
                    </div>

                    <div class="team-item">
                        <div class="top">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                            <img src="assets/images/team/team4.jpg" alt="Team">
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
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Micheal Shon</h3>
                            <span>Donation Collector</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Team -->

        <!-- Counter -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                            <img src="assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="3210">00</span>
                            </h3>
                            <p>Donors</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                            <img src="assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="7980">00</span>
                            </h3>
                            <p>Volunteers</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                            <img src="assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="101">00</span>
                            </h3>
                            <p>Missions</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                            <img src="assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="825">00</span>
                            </h3>
                            <p>Projects</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Testimonials -->
        <section class="testimonials-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What People Say About Our Work</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                </div>
                <div class="testimonials-slider owl-theme owl-carousel">

                    <div class="testimonials-item">
                        <div class="top">
                            <i class="icofont-quote-right"></i>
                            <p>Lorem ipsum dolor sit amet elit. Dolores dignissimos suscipit veritatis sunt accusamus optio ratione debitis temporibus deserunt cum doloremque impedit sit id, unde quia tenetur mollitia quis consequatu</p>
                        </div>
                        <ul class="content align-items-center">
                            <li>
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                                <img src="assets/images/testimonials1.jpg" alt="Testimonials">
                            </li>
                            <li>
                                <h3>Victor James</h3>
                                <span>Country Director</span>
                                <ul class="rating">
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="testimonials-item">
                        <div class="top">
                            <i class="icofont-quote-right"></i>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</p>
                        </div>
                        <ul class="content align-items-center">
                            <li>
                            <img src="<?php echo base_url();?>assets/images/team/team3.jpg" alt="Team">
                                <img src="assets/images/testimonials2.jpg" alt="Testimonials">
                            </li>
                            <li>
                                <h3>Tom Henry</h3>
                                <span>Manager</span>
                                <ul class="rating">
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="testimonials-item">
                        <div class="top">
                            <i class="icofont-quote-right"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        </div>
                        <ul class="content align-items-center">
                            <li>
                                <img src="<?php echo base_url();?>assets/images/testimonials3.jpg" alt="Testimonials">
                            </li>
                            <li>
                                <h3>Micheal Shon</h3>
                                <span>Staff</span>
                                <ul class="rating">
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star checked"></i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonials -->

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