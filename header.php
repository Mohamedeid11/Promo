<?php
    include("languages/lang_function.php");
    ChangeLanguage();
?>

<?php
    include('public/config.php');
    $active_parent_category_id = 0;
    if (\preg_match('/products\.php|gallery\.php/iUs', $_SERVER['PHP_SELF'])) {
        $active_parent_category_id = (\intval($_GET['parent_category_id']) > 0 ? $_GET['parent_category_id'] : 0);
    }
    if (\preg_match('/product\-details\.php/iUs', $_SERVER['PHP_SELF'])) {
        $sub_category_id = \intval($_GET['product_id']);
        $_result = $con->query("SELECT * FROM `sub_categories` where `sub_category_id`='$sub_category_id'");
        $_row = mysqli_fetch_array($_result);
        $active_parent_category_id = ($_row['parent_category_id']);
    }
    if (\preg_match('/about\-us\.php/iUs', $_SERVER['PHP_SELF'])) {
        $active_parent_category_id = 'about-us';
    }
    if (\preg_match('/contact\-us\.php/iUs', $_SERVER['PHP_SELF'])) {
        $active_parent_category_id = 'contact-us';
    }
    if (\preg_match('/login\.php/iUs', $_SERVER['PHP_SELF'])) {
        $active_parent_category_id = 'login';
    }
    if (\preg_match('/my\-cart\.php/iUs', $_SERVER['PHP_SELF'])) {
        $active_parent_category_id = 'my-cart';
    }
    $query_contact = $con->query("SELECT * FROM `contact` order by id desc");
    $row_contact = mysqli_fetch_array($query_contact);
    $email = $row_contact['email'];
    $phone = $row_contact['phone'];
    $address = (lang('lang_key') == 'en' ? $row_contact['address_en'] : $row_contact['address']);
    $fb = $row_contact['facebook'];
    $tw = $row_contact['twitter'];
    $google = $row_contact['google-plus'];
    $mob = $row_contact['mobile'];
    $website = $row_contact['website'];
    $pinterest = $row_contact['pinterest'];


    $result = $con->query("SELECT * FROM `setting` where id=1 limit 1 ") or die(mysqli_error());
    $row_select = mysqli_fetch_array($result);
    $footer_caption = (lang('lang_key') == 'en' ? $row_select['footer_caption_en'] : $row_select['footer_caption']);
    $vat = $row_select['vat'];
    $discount_percentage = $row_select['discount_percentage'];
    $email_for_send_actions = $row_select['email_for_send_actions'];
    $header_title = (lang('lang_key') == 'en' ? $row_select['header_title_en'] : $row_select['header_title']);
    $slider_image = $row_select['slider_image'];
    $logo = $row_select['logo'];
    $long_loca = $row_select['lang'];
    $lat_loca = $row_select['let'];


    $query_select = $con->query("SELECT * FROM `about` WHERE `id` = '1' LIMIT 1");
    $row_select = mysqli_fetch_array($query_select);

    $title = (lang('lang_key') == 'en' ? $row_select['title_en'] : $row_select['title']);
    $content = (lang('lang_key') == 'en' ? $row_select['content_en'] : $row_select['content']);
    $image = $row_select['image'];
?>

<!DOCTYPE HTML>
<html leng="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Promobh - Home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animated.css"/>
        <link rel="stylesheet" href="css/footer-header.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/media.css"/>
        <!--If It IE 9-->
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <style type="text/css">
            body{
                direction: <?= lang('direction') ?> !important;
                text-align: <?= lang('align') ?> !important;
                text-transform: capitalize;
            }
            .top-header .min-cart {
                margin-<?= lang('align_reverse') ?>: 10px !important;
            }
            .dropdown-menu{
                <?= lang('align') ?>: 0  !important;
                <?= lang('align_reverse') ?>:auto !important;
            }
            .custom-control-label:before,
            .custom-control-label:after{
                <?= lang('align_reverse') ?>: auto !important;
                <?= lang('align') ?>: -1.5rem !important;
            }
        </style>
        <script src="js/jquery%203.5.1%20.js"></script>
        <script src="js/puge.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--start upper-bar-->
        <div class="upper-bar p-0 text-center">
            <div class="ocntainer">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12 details  py-2">
                        <span  class="pt-2 d-block">
                            <i class="fas fa-phone-alt mr-2"></i>
                            <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </span>
                    </div>
                    <div class="col-md-6 col-12 teng py-2">
                        <ul class="list-unstyled m-0">
                            <li><a href="<?= $fb ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="<?= $tw ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= $google ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/<?= $pinterest ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end upper-bar-->
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" class="w-75"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto">

                        <a class="nav-link" href="index.php"><?= lang('home') ?> <span class="sr-only">(current)</span></a>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="sections.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= lang("services") ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">

                                    <?php
                                        $parent_categories = $con->query("SELECT * FROM parent_categories");
                                        while ($row = mysqli_fetch_array($parent_categories)) {
                                            $get_parent_category_id = $row['parent_category_id'];
                                            $parent_category_name = (lang('lang_key') == 'en' ? $row['parent_category_name'] : $row['parent_category_name_ar']);
                                            $count_sub_categories_by_category_id = count_sub_categories_by_category_id($get_parent_category_id);
                                            ?>
                                            <div class="col-12">
                                                <a class="dropdown-item d-block text-<?= lang('align') ?>" href="services.php?parent_category_id=<?= $get_parent_category_id ?>"><?= $parent_category_name; ?></a>
                                            </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </li>



                        <a class="nav-link" href="our-work.php"><?= lang('gallery'); ?></a>
                        <a class="nav-link" href="About-us.php"><?= lang('about_us'); ?></a>
                        <a class="nav-link" href="contact-us.php"><?= lang('contact_us'); ?></a>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownlang" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= lang('language') ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownlang">
                                <a class="dropdown-item text-<?= lang('align') ?>" href="?change_lang=ar">العربية</a>
                                <a class="dropdown-item text-<?= lang('align') ?>" href="?change_lang=en">Einglish</a>
                                <a class="dropdown-item text-<?= lang('align') ?>" href="#">Indian</a>
                                <a class="dropdown-item text-<?= lang('align') ?>" href="#">Filipino</a>
                                <a class="dropdown-item text-<?= lang('align') ?>" href="#">Bengali</a>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
