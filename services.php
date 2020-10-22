<?php
include ('header.php');
$parent_category_id = $_GET['parent_category_id'];

        ?>

<?php
$parent = $con->query("SELECT * FROM `parent_categories` WHERE `parent_category_id`='$parent_category_id' ORDER BY `parent_category_id` ASC");

while ($row = mysqli_fetch_assoc($parent)) {

    $parent_category_name =
        (lang('lang_key') == 'en' ? $row['parent_category_name'] : $row['parent_category_name_ar']);
}
?>

<!--start slider-->
<div class="slidr">
    <div class="oveer">
        <div class="cocas">
            <h1>
                <?= $parent_category_name?></h1>
        </div>
    </div>
</div>
<!--end slider-->



<!--start breadcrumb-->
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a>
                    <?=lang('services');?>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $parent_category_name ?>
            </li>
        </ol>
    </div>
</nav>
<!--end breadcrumb-->

<!--start printing-->
    <?php
        $allData = $con->query(" SELECT * FROM `sub_categories` where `parent_category_id` = $parent_category_id  ");
        foreach ($allData as $key=>$data)
        {
            $parent_id = $data['parent_category_id'];
            $name = $data['sub_category_name'];
            $desc = $data['sub_category_desc'];
            $image = $data['sub_category_image'];
            if ($_COOKIE['site_lang'] == 'ar') {
                $name = $data['sub_category_name_ar'];
                $desc = $data['sub_category_desc_ar'];
            }
            ?>
            <div class="printing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12 cori">
                            <img src="<?= $image; ?>" class="w-100" alt="printing"/>
                        </div>
                        <div class="col-md-6 col-12 vacen">
                            <div class="description">
                                <h3 class="mb-4"><?= lang('strategic_goals');?></h3>
                                <p>
                                    <?= $desc; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
<!--end printing-->
<?php include ('footer.php') ?>
