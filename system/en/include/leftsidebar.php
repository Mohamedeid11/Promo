<div id="cssmenu">
    <ul>
        <li id="item1" class="active"><a href="index.php"><span>Home</span></a></li>
        <?php if ($_SESSION['cat_and_sub'] == '1') { ?>

            <li id="item2" class="has-sub">
                <a href="#"><span>Services</span></a>
                <ul class="has-sub">
                    <li><a href="services_add.php"><span>Add New Service  </span></a></li>
                    <li><a href="services_view.php"><span>View All </span></a></li>
                </ul>
            </li>

            <li id="item3" class="has-sub">
                <a href="#"><span>Sub services</span></a>
                <ul class="has-sub">
                    <li><a href="sub_service_add.php"><span>Add New Sub service  </span></a></li>
                    <li><a href="sub_service_view.php"><span>View All </span></a></li>
                </ul>
            </li>
             <li id="item4" class="has-sub">
                <a href="#"><span> Slider</span></a>
                <ul class="has-sub">
                    <li><a href="slider_add.php"><span>Add Slider  </span></a></li>
                    <li><a href="slider_view.php"><span> View All </span></a></li>
                </ul>
            </li>


        <?php } ?>

        <?php if ($_SESSION['statics'] == '1') { ?>
            <li id="item1" class="has-sub">
                <a href="#"><span> Gallery</span></a>
                <ul class="has-sub">
                    <li><a href="gallery_add.php"><span>Add Gallery  </span></a></li>
                    <li><a href="gallery_view.php"><span> View All </span></a></li>
                </ul>
            </li>
        <?php } ?>


        <?php if ($_SESSION['clients'] == '1') { ?>
            <li id="item7" class="has-sub">
                <a href="#"><span>Clients</span></a>
                <ul class="has-sub">
                    <li><a href="testimonial_add.php"><span>Add New </span></a></li>
                    <li><a href="testimonial_view.php"><span> View All </span></a></li>
                </ul>
            </li>
        <?php } ?>

        <?php if ($_SESSION['about'] == '1') { ?>
            <li id="item9" class="has-sub">
                <a href="about_edit.php?id=1"><span>About Us</span></a>
            </li>

            <li id="item90" class="has-sub">
                <a href="contact_edit.php"><span>Contact Us</span></a>
            </li>

        <?php } ?>


        <?php if ($_SESSION['problems'] == '1') { ?>

<!--            <li id="item13" class="has-sub">-->
<!--                <a href="complaints_view.php"><span>Complaints</span></a>-->
<!--            </li>-->
        <?php } ?>
        <?php if ($_SESSION['comments'] == '1') { ?>

<!--            <li id="item101" class="has-sub"><a href="subcat_comments_view.php"><span>Comments </span></a></li>-->
        <?php } ?>

        <?php if ($_SESSION['messages'] == '1') { ?>

            <li id="item103" class="has-sub"
                ><a href="#"><span>Messages </span></a>
                <ul class="has-sub">
                    <li><a href="messages_view.php"><span>View All messages</span></a></li>
                </ul>
            </li>
        <?php } ?>

        <?php if ($_SESSION['users'] == '1') { ?>

<!--            <li id="item12" class="has-sub">-->
<!--                <a href="#"><span>Users</span></a>-->
<!--                <ul class="has-sub">-->
<!--                    <li><a href="user_add.php"><span>Add New User</span></a></li>-->
<!--                    <li><a href="users_view.php"><span>View All</span></a></li>-->
<!--                </ul>-->
<!--            </li>-->

            <li id="item112" ><a href="setting_edit.php"><span>Setting</span></a></li>

        <?php } ?>


        <li><a href="logout.php"><span>Logout </span></a></li>



    </ul>
</div>