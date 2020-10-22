<div class="content-page">
    <div class="content">
        <div class="container">

            <h3 style="display:block;text-align:center;margin-top: 15px;border-bottom: 1px solid #000;width: 40%;margin-right: auto;padding: 20px 0;margin-left: auto;margin-bottom: 60px;">
                Welcome to Promo

            </h3>

            <div class="row pricing-plan">
                <div class="col-md-12">
                    <div class="row">

                        <?php if ($_SESSION['cat_and_sub'] == '1') { ?>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-folder"></i> Services</span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="services_add.php"><span>Add New Service</span></a></li>
                                        <li><a href="services_view.php"><span>View All </span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-file"></i> Sub Services </span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="sub_service_add.php"><span>Add New Sub Service  </span></a></li>
                                        <li><a href="sub_service_view.php"><span>View All </span></a></li>
                                    </ul>
                                </div>
                            </div>

                        <?php } ?>



<!--                        --><?php //if ($_SESSION['orders'] == '1') { ?>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <div class="price_card text-center">
                                        <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                            <span class="name"> <i class="fa fa-folder"></i> Slider</span>
                                        </div>
                                        <ul class="price-features">
                                            <li><a href="slider_add.php"><span>Add New Slider</span></a></li>
                                            <li><a href="slider_view.php"><span>View All </span></a></li>
                                        </ul>
                                    </div>
                                </div>
<!---->
<!--                            <div class="col-md-3 col-lg-3 col-xl-3">-->
<!--                                <div class="price_card text-center">-->
<!--                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">-->
<!--                                        <span class="name"> <i class="fa fa-cart-arrow-down"></i> Orders</span>-->
<!--                                    </div>-->
<!--                                    <ul class="price-features">-->
<!--                                        <li><a href="order_add.php"><span>Add New Order  </span></a></li>-->
<!--                                        <li><a href="order_view.php"><span>Current Orders  </span></a></li>-->
<!--                                        <li><a href="last_orders.php"><span>Last Orders  </span></a></li>-->
<!--                                        <li><a href="payment.php"><span>Payment</span></a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //} ?>
                        <?php if ($_SESSION['clients'] == '1') { ?>


                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-folder"></i> Gallery</span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="gallery_add.php"><span>Add New Gallery</span></a></li>
                                        <li><a href="gallery_view.php"><span>View All </span></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_SESSION['about'] == '1') { ?>

                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-users"></i> Clients </span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="testimonial_add.php"><span>Add New</span></a></li>
                                        <li><a href="testimonial_view.php"><span>View All</span></a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-info"></i> About</span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="about_edit.php?id=1"><span>About Promo
                                                </span></a></li>
                                        <li><a href="contact_edit.php"><span>Call Us</span></a></li>
                                        <li><a href="setting_edit.php"><span>Setting</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_SESSION['users'] == '1') { ?>

                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="price_card text-center">
                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">
                                        <span class="name"> <i class="fa fa-file"></i> Messages </span>
                                    </div>
                                    <ul class="price-features">
                                        <li><a href="messages_view.php"><span>View All </span></a></li>
                                    </ul>
                                </div>
                            </div>

<!--                            <div class="col-md-3 col-lg-3 col-xl-3">-->
<!--                                <div class="price_card text-center">-->
<!--                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">-->
<!--                                        <span class="name"> <i class="fa fa-user"></i> Users</span>-->
<!--                                    </div>-->
<!--                                    <ul class="price-features">-->
<!--                                        <li><a href="user_add.php"><span>Add New User</span></a></li>-->
<!--                                        <li><a href="users_view.php"><span>View All</span></a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
                        <?php } ?>
<!--                        --><?php //if ($_SESSION['reports'] == '1') { ?>
<!---->
<!--                            <div class="col-md-3 col-lg-3 col-xl-3">-->
<!--                                <div class="price_card text-center">-->
<!--                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">-->
<!--                                        <span class="name"> <i class="fa fa-file"></i> Reports</span>-->
<!--                                    </div>-->
<!--                                    <ul class="price-features">-->
<!--                                        <li><a href="financial_report.php"><span>Financial Report By Date</span></a></li>-->
<!---->
<!--                                        <li><a href="select_financial_report.php"><span>Choose  Report Type</span></a></li>-->
<!--                                        <li><a href="print_deleted_report.php"><span>  Report Deleted Requests</span></a></li>-->
<!--                                        <li><a href="print_edited_report.php"><span>Report Edited Requests-->
<!--                                                </span></a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //} ?>

<!--                        --><?php //if ($_SESSION['statics'] == '1') { ?>
<!---->
<!--                            <div class="col-md-3 col-lg-3 col-xl-3">-->
<!--                                <div class="price_card text-center">-->
<!--                                    <div class="pricing-header bg-success" style="background-color:#967041 !important;">-->
<!--                                        <span class="name"> <i class="fa fa-dollar"></i> Statistics</span>-->
<!--                                    </div>-->
<!--                                    <ul class="price-features">-->
<!--                                        <li><a href="statistics.php">View Statistics </a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //} ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include("include/footer_text.php"); ?>
</div>
