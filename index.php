<?php include ('header.php') ?>
<!--start slider-->
<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $i = 0;
                $query = $con->query("SELECT * FROM `slider` order by id desc  ");
                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : '' ?> "></li>
                    <?php
                    $i++;
                }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
                $result = $con->query("SELECT * FROM `slider` order by id desc  ");
                if (mysqli_num_rows($result) > 0) {
                    $x = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $slider_id = $row["id"];
                        $desc = $row[GetLang('desc')];
                        $slide_image = $row["image"];
                        $link = $row["link"];
                        ?>

                        <div class="carousel-item <?php
                        if ($x == 1) {
                            echo "active";
                        }
                        ?> " >
                            <img src="<?= $slide_image ?>" class="d-block w-100" alt="<?= $slider_id ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="<?= $link; ?> class="text-<?= lang('align') ?>" style="color:white; text-decoration:none;" ><h5> <?= $desc; ?></h5></a>
                            </div>

                        </div>


                        <?php
                        $x++;
                    }
                }
            ?>
        </div>
    </div>
</div>
<!--end slider-->

<!--     Start About-->
<div class="about text-center m-5">
    <h2><?= lang('about_promo'); ?></h2>


    <div class="container">
        <div id="testmonial" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $query_select = $con->query("SELECT * FROM `about` WHERE `id` = '1' LIMIT 1");
                    $row_select = mysqli_fetch_array($query_select);

                    $title = (lang('lang_key') == 'en' ? $row_select['title_en'] : $row_select['title']);
                    $content = (lang('lang_key') == 'en' ? $row_select['content_en'] : $row_select['content']);
                ?>
                <div class="text pt-5">
                    <?= $content; ?>
                </div>
                <a class="btn btn-secondary mt-5" href="About-us.php"> <?= lang('view_more'); ?> </a>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
    </div>

</div>
<!--    End About-->

<!-- start our services -->

<div class="gallery text-center">
    <div class="container">
        <div class=" mb-5">
            <h2><?= lang('services'); ?></h2>
        </div>
        <div class="row snop">
            <?php
                $allData = $con->query("SELECT * FROM `sub_categories` ORDER BY `sub_category_id` DESC limit 6");
                while ($row = mysqli_fetch_assoc($allData)) {
                    $id = $row['sub_category_id'];
                    $name = $row['sub_category_name'];
                    $desc = $row['sub_category_desc'];
                    $icon = $row['sub_category_icon'];
                    if ($_COOKIE['site_lang'] == 'ar') {
                        $name = $row['sub_category_name_ar'];
                        $desc = $row['sub_category_desc_ar'];
                    }
                    ?>
                    <!-- 1 -->
                    <div class="col-md-4 col-12 mb-5 sevanced">
                        <a class="img-services row align-items-center">
                            <img src="<?= $icon ?>" alt="<?= $name ?>" class=" img-fluid mx-auto"/>
                        </a>
                        <div class="tit-serv">
                            <h3><?= $name ?></h3>
                        </div>
                        <div class="parce">
                            <p><?= $desc ?>.</p>
                        </div>
                    </div>

                    <!--./1-->
                <?php }
            ?>

        </div>
    </div>
</div>
<div class="container">
    <hr>
</div>
<!-- end our services -->

<!-- start gallery -->
<div class="gallery text-center">
    <div class="container">
        <div class="totlin mb-5">
            <h2><?= lang('gallery'); ?></h2>
        </div>
        <div class="row">
            <?php
                $query = $con->query("SELECT * FROM `gallery` ORDER BY `id` ASC");
                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $name = $row[GetLang('name')];
                    $image = $row['image'];
                    ?>
                    <!-- 1 -->
                    <div class="col-md-4 col-12 voda">
                        <div class="image-photo">
                            <h3 class="image_title"> <?= $name ?></h3>
                            <img src="<?= $image; ?>" class="thumb-img" alt="image">
                        </div>
                    </div>
                    <!-- ./1 -->

                <?php } ?>
        </div>
    </div>

</div>
<!-- end gallery -->

<!--Start popup-->
<div class="popup">
    <div class="inner">
        <img src=""/>
    </div>
</div>
<!--End popup-->

<div class="container">
    <hr>
</div>



<!--End TESTMONIAL-->
<div class="testmonial text-center">
    <h2><?= lang('clients'); ?></h2>


    <div class="container">
        <div class="row align-items-center" id="testmonial">

            <?php
                $i = 0;
                $query = $con->query("SELECT * FROM `testimonial` ORDER BY `id` ASC");
                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $image = $row['image'];
                    ?>
                    <div class="col-2 justify-content-center">
                        <img  class="img-fluid testmonial_images" src="<?= $image; ?>" alt="ava-1">
                    </div>
                    <?php
                    $i++;
                }
            ?>

        </div>
    </div>

</div>

<!--End our team-->

<div class="container">
    <hr>
</div>

<!--start our statistics-->
<?php
    $query_select = $con->query("SELECT * FROM `setting` order by id desc");

    $row_select = mysqli_fetch_array($query_select);

    $id = $row_select['id'];
    $statistics_clients = $row_select['android_version'];
    $statistics_projects = $row_select['ios_version'];
    $statistics_photos = $row_select['ios_link'];
?>
<!--<div class="statistics text-center">
    <h2><?= lang('statistics'); ?></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="v-card">
                    <div class="imge">
                        <img src="img/customer.png" alt="customer"/>
                    </div>
                    <h4><?= lang('clients') ?></h4>
                    <span><?= $statistics_clients; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="v-card">
                    <div class="imge">
                        <img src="img/project.png" alt="project"/>
                    </div>
                    <h4><?= lang('projects') ?></h4>
                    <span><?= $statistics_projects; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="v-card">
                    <div class="imge">
                        <img src="img/icons8-camera-64.png" alt="camera"/>
                    </div>
                    <h4><?= lang('photo') ?></h4>
                    <span><?= $statistics_photos; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!--End our statistics-->

<!--start touch-->

<?php
    $query_contact = $con->query("SELECT * FROM `contact` order by id desc");
    $row_contact = mysqli_fetch_array($query_contact);
    $email = $row_contact['email'];
    $phone = $row_contact['phone'];
    $address = (lang('lang_key') == 'en' ? $row_contact['address_en'] : $row_contact['address']);
?>
<div class="touch">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12 contar">
                <div class="first-coulmm">
                    <h3 class="mb-5">GET IN TOUCH</h3>
                    <ul class="list-unstyled">
                        <li class="mb-5"><i class="fas fa-envelope"></i><span class=" ml-3"><?= $email; ?></span></li>
                        <li class="mb-5"><i class="fas fa-map-marked-alt"></i><span class=" ml-3" style="font-size: 16px;"><?= $address; ?></span></li>
                        <li class="mb-5"><i class="fas fa-mobile"></i><span class=" ml-4"><?= $phone; ?></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-12 text-center contar">
                <?php
                    if (isset($_POST['submit'])) {
                        $name = mysqli_real_escape_string($con, trim($_POST['name']));
                        $phone = mysqli_real_escape_string($con, trim($_POST['phone']));
                        $email = mysqli_real_escape_string($con, trim($_POST['email']));
                        $content = mysqli_real_escape_string($con, trim($_POST['content']));

                        $con->query("INSERT INTO `messages` VALUES (NULL, '$name', '$phone', '$email', '$content' , current_timestamp());");
                    }
                ?>
                <div class="information">
                    <h3 class="m-4">SAY SOMETHING</h3>
                    <form id="client_address_add" method="POST"  enctype="multipart/form-data" data-parsley-validate novalidate >
                        <div class="form-group">
                            <input type="text" name="name" parsley-trigger="change"  placeholder="Write Your Name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" parsley-trigger="change"  placeholder="Write Your Phone Number" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" parsley-trigger="change"  placeholder="Write Your E-Mail" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="content"  id='content' minlength="3" maxlength="1000" required=""></textarea>
                        </div>
                        <button class="btn btn-primary waves-effect waves-light mb-3" id="submit" name="submit"> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end touch-->


<?php include ('footer.php') ?>