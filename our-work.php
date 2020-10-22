<?php include ('header.php') ?>

<!--start slider-->
<div class="slidee"></div>
<!--end slider-->



<!--start breadcrumb-->
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><?= lang('home'); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= lang('gallery'); ?></li>
        </ol>
    </div>
</nav>
<!--end breadcrumb-->

<!-- start gallery -->
<div class="gallery text-center">
    <div class="container">
        <div class="totlin mb-5">
            <h2><?= lang('gallery'); ?></h2>
        </div>
        <div class="row">
            <!-- 1 -->
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
                    <?php
                }
            ?>
            <!-- ./1 -->

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
<?php include ('footer.php') ?>
