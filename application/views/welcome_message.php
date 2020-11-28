
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
                    <img src="<?php echo base_url();?>/assets/images/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
          <?php $this->load->view('menu');?>
        <!-- End Navbar -->

        <!-- Banner -->
        <?php $this->load->view('banner');?>
        <!-- End Banner -->

        <!-- About -->
        <div class="about-area two pt-100 pb-70">
            <div class="about-shape">
                <img src="<?php echo base_url();?>/assets/images/about-shape1.png" alt="Shape">
            </div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title two">
                                <span class="sub-title">About The Leader</span>
                                <h2>Meet The Leader Of The Future <span>Henry James Parker</span></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                            </div>
                            <ul class="align-items-center">
                                <li>
                                    <img src="<?php echo base_url();?>/assets/images/signature.png" alt="Signature">
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
                            <img src="<?php echo base_url();?>/assets/images/leader.jpg" alt="About">
                            <img src="<?php echo base_url();?>/assets/images/about-main2.jpg" alt="About">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Election -->
        <div class="election-area ptb-100">
            <div class="election-shape">
                <img src="<?php echo base_url();?>/assets/images/about-shape1.png" alt="Shape">
                <img src="<?php echo base_url();?>/assets/images/about-shape1.png" alt="Shape">
            </div>
            <div class="container">
                <h2>It's Election day. Go Vote For Parker!</h2>
            </div>
        </div>
        <!-- End Election -->

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

        <!-- Counter -->
        <div class="counter-area two pt-100 pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>/assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="3210">00</span>
                            </h3>
                            <p>Donors</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>/assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="7980">00</span>
                            </h3>
                            <p>Volunteers</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>/assets/images/counter-shape2.png" alt="Shape">
                            <h3>
                                <span class="odometer" data-count="101">00</span>
                            </h3>
                            <p>Missions</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <img src="<?php echo base_url();?>/assets/images/counter-shape2.png" alt="Shape">
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

        <!-- Live -->
        <div class="live-area ptb-100">
            <div class="container">
                <div class="section-title two">
                    <span class="sub-title">Live</span>
                    <h2>See Our Work Live</h2>
                </div>
                <div class="live-content">
                    <img src="<?php echo base_url();?>/assets/images/live-main.jpg" alt="Live">
                    <div class="video-wrap">
                        <button class="js-modal-btn" data-video-id="YzIcWW3FWSQ">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Live -->

        <!-- Donate -->
        <div class="donate-area two pb-100">
            <div class="container">
                <div class="section-title two">
                    <span class="sub-title">Donate Us</span>
                    <h2>Contribute & Be A Part Of Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur numquam magnam, sed perspiciatis mollitia nesciunt amet, consequuntur error culpa nobis dolore asperiores eum non quasi</p>
                </div>
                
                <div class="donate-wrap">
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="donate-left">
                                <h3>Your Donation Helps To Choose A Perfect Candidate</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minus quis asperiores architecto iste sunt eius aut, voluptatem at? Adipisci sint, quod minima debitis totam architecto</p>
                                <ul>
                                    <li>
                                        <a href="#">$10.00</a>
                                    </li>
                                    <li>
                                        <a href="#">$15.00</a>
                                    </li>
                                    <li>
                                        <a href="#">$20.00</a>
                                    </li>
                                    <li>
                                        <a href="#">$50.00</a>
                                    </li>
                                    <li>
                                        <a href="#">$100.00</a>
                                    </li>
                                    <li>
                                        <a href="#">$200.00</a>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                    </li>
                                </ul>
                                <a class="common-btn two" href="#">
                                    Donate Now
                                    <i class="icofont-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="donate-right">
                                <span>The Communism</span>
                                <h3>Election Manifesto 2020</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur commodi perspiciatis voluptate aut. Rerum, deserunt ipsa veritatis molestias sequi at quisquam ut ea</p>
                                <a class="common-btn two" href="#">
                                    Download Now
                                    <i class="icofont-download"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Donate -->

        <!-- Testimonials -->
       <?php $this->load->view('testimonials');?>
        <!-- End Testimonials -->

        <!-- Subscribe -->
        <div class="subscribe-area two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="subscribe-content">
                            <h2>Stay Up-To-Date Of Our Election Campaign & Get Subscribe!</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="subscribe-item">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
            
                                <button class="btn common-btn two" type="submit">
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

        <!-- Events -->
       <?php $this->load->view('event');?>
        <!-- End Events -->

        <!-- Blog -->
       <?php $this->load->view('blog');?>
        <!-- End Blog -->

        <!-- Footer -->
        <?php $this->load->view('footer');?>
        <!-- End Footer -->

        <!-- Go Top -->
        <div class="go-top two">
            <i class="icofont-polygonal"></i>
            <i class="icofont-polygonal"></i>
        </div>
        <!-- End Go Top -->


        <!-- Essential JS -->
        <?php $this->load->view('footerJs');?>
    </body>
</html>