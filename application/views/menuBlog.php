
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
                            <h2>Blog</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Blog</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog -->
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog2.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>20 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">We Can Achieve Anything By Heart</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog3.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>21 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Together We Can Achieve Anything By Work</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog4.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>22 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">How Communication Effects In Politics</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog5.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>23 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">How To Choose The Right Candidate To Vote</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog6.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>24 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">How To Stand Against Any Violence</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="blog-item">
                            <div class="top">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url();?>assets/images/blog/blog7.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>25 Oct, 2020</span>
                                    </li>
                                    <li>
                                        <i class="icofont-user-alt-4"></i>
                                        <span>By:</span>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">How To Become A good Citizen & Serve Country</a>
                                </h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ut nisi impedit debitis maiores blanditiis eaque. Dicta minima et pariatur, nostrum ab impedit tenetur repellendus molestias</p>
                                <a class="blog-btn" href="blog-details.html">
                                    Read More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pagination-area">
                    <ul>
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a class="active" href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Blog -->

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