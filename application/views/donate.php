
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
                            <h2>Donation</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Donation</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Donation -->
        <div class="help-page-area ptb-100">
            <div class="container">
                <div class="help-content">
                    <form>
                        <ul class="dollar">
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
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address Line 1:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address Line 2:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="gateway">
                            <h4>Select Payment Method:</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Cash</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Card</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Paypal</label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn common-btn">
                                Donate Now
                                <i class="icofont-heart"></i>
                            </button>
                        </div>

                    </form>
                </div>

                <div class="cash-content">
                    <h3>Information:</h3>
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                        <li>It is a long established fact that a reader will be distracted by the readable</li>
                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Donation -->

        <!-- Footer -->
       <?php $this->load->view('footer');?>
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