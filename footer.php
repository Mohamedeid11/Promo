<!-- start footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col align-self-start skop text-white">
                <?php
                    $query_select = $con->query("SELECT * FROM `about` WHERE `id` = '1' LIMIT 1");
                    $row_select = mysqli_fetch_array($query_select);

                    $title = (lang('lang_key') == 'en' ? $row_select['title_en'] : $row_select['title']);
                    $content = (lang('lang_key') == 'en' ? $row_select['content_en'] : $row_select['content']);
                    $image = $row_select['image'];
                ?>
                <div class="first-lone">
                    <img src="<?= $image; ?>" class="mb-4" alt="logo">
                    <p class="text-capitalize text-white">
                        <?= $content ?>
                    </p>
                </div>
            </div>
            <div class="col align-self-center skop text-white">
                <div class="list-group mt-5">
                    <ul class="list-unstyled mt-5">
                        <h1 style="color: white">Services</h1>
                        <?php
                            $parent_categories = $con->query("SELECT * FROM parent_categories ORDER BY `parent_category_id` DESC limit 5");
                            while ($row = mysqli_fetch_array($parent_categories)) {
                                $get_parent_category_id = $row['parent_category_id'];
                                $parent_category_name = (lang('lang_key') == 'en' ? $row['parent_category_name'] : $row['parent_category_name_ar']);
                                $count_sub_categories_by_category_id = count_sub_categories_by_category_id($get_parent_category_id);
                                ?>
                                <li>
                                    <a href="services.php?parent_category_id=<?= $get_parent_category_id ?>"  class="nav-link text-white text-<?= lang('align') ?>"><?= $parent_category_name; ?></a>
                                </li>
                            <?php }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="col align-self-end skop text-white">
                <div class="list-group mt-5">
                    <ul class="list-unstyled mt-5">
                        <li>
                            <i class="fas fa-envelope mr-2 text-white"></i>
                            <a href="mailto:<?= $email ?>" class="text-white text-<?= lang('align') ?>"><?= $email ?></a>
                        </li>
                        <br>
                        <li>

                            <i class="fab fa-whatsapp mr-2 text-white"></i>
                            <a href="https://wa.me/<?= $pinterest ?>" class="text-white text-<?= lang('align') ?>"><?= $pinterest ?></a>
                        </li>
                        <br>
                        <li>
                            <i class="fas fa-map-marker-alt mr-2 text-white"></i>
                            <span class="text-<?= lang('align') ?>">
                                <?= $address ?>
                            </span>
                        </li>
                        <br>
                        <li>
                            <i class="fas fa-phone-alt mr-2 text-white"></i>
                            <span class="text-<?= lang('align') ?>">
                                <a href="tel:<?= $mob ?>" class="text-white text-<?= lang('align') ?>"><?= $mob ?></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--        <div class="my-links">-->
        <!--            <ul class="list-unstyled mt-5">-->
        <!--                <li><a href="index.php">--><?//= lang('home') ?><!--</a></li>-->
        <!--                <li><a href="services.php">--><?//= lang("services") ?><!--</a></li>-->
        <!--                <li><a href="our-work.php">--><?//= lang('gallery') ?><!-- </a></li>-->
        <!--                <li><a href="About-us.php">--><?//= lang('about_us') ?><!-- </a></li>-->
        <!--                <li><a href="contact-us.php">--><?//= lang('contact_us') ?><!-- </a></li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--        <div class="my-ico">-->
        <!--            <ul class="list-unstyled mt-5">-->
        <!--                <li><a href="--><?//= $fb ?><!--"><i class="fab fa-facebook"></i></a></li>-->
        <!--                <li><a href="--><?//= $tw ?><!--"><i class="fab fa-twitter"></i></a></li>-->
        <!--                <li><a href="--><?//= $google ?><!--"><i class="fab fa-instagram"></i></a></li>-->
        <!--                <li><a href="--><?//= $google ?><!--"><i class="fab fa-whatsapp" style="font-size:35px;color:white"></i></a></li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <hr>
    </div>
    <div class="copyright text-center mt-4">
        <?= $footer_caption ?>
    </div>
</footer>
<!-- end footer -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fas fa-arrow-alt-circle-up"></i>
</div>
<!-- end scroll top -->




<script src="js/all.min.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>