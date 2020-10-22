<?php include ('header.php') ?>

<!--start slider-->
<div class="slid"></div>
<!--end slider-->

<!--start our values-->
<!--<div class="values text-center m-5">
    <div class="container">
        <div class="cla-tit mb-5">
            <h2><?= lang('our_values'); ?></h2>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-12">
                <img src="img/icons8-macbook-medal-100.png" class="mb-4" alt="macbook">
                <span><?= lang('professionalism'); ?></span>
            </div>
            <div class="col-md-4 col-12">
                <img src="img/icons8-easel-90.png" class="mb-4" alt="easel">
                <span><?= lang('creativity') ?></span>
            </div>
            <div class="col-md-4 col-12">
                <img src="img/icons8-honesty-90.png" class="mb-4" alt="honesty">
                <span><?= lang('credibility'); ?></span>
            </div>
        </div>
    </div>
</div>-->
<!--start our values-->
<?php
    $allData = $con->query("SELECT * FROM `about` ORDER BY `id` ASC");

    $row_select = mysqli_fetch_array($allData);

    $id = $row_select['id'];
    $vision = $row_select[GetLang('vision')];
    $vision_image = $row_select['vision_image'];
    $mission = $row_select[GetLang('mission')];
    $mission_image = $row_select['mission_image'];
    $goals = $row_select[GetLang('goals')];
    $goals_image = $row_select['goals_image'];
?>

<!--start vision and mission-->
<div class="mission">
    <div class="container">
        <div class="title-misson">
            <!--<h2 class="text-center"><?= lang('vision_and_mission'); ?></h2>-->
        </div>
        <div class="vision">
            <div class="row mb-4">
                <div class="col-md-4 col-12 core">
                    <img src="<?= $vision_image; ?>" class="w-100" alt="people"/>
                </div>
                <div class="col-md-8 col-12 vacin">
                    <div class="description">
                        <h3 class="mb-4"><?= lang('our_vision'); ?></h3>
                        <p><?= $vision; ?>.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr>
            </div>
            <div class="row mb-4">
                <div class="col-md-8 col-12 vacin">
                    <div class="description">
                        <h3 class="mb-4"><?= lang('our_mission'); ?></h3>
                        <p> <?= $mission; ?>.</p>
                    </div>
                </div>
                <div class="col-md-4 col-12 core">
                    <img src="<?= $mission_image; ?>" class="w-100" alt="people"/>
                </div>
            </div>
            <div class="container">
                <hr>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-12 vacin">
                    <div class="description">
                        <h3 class="mb-4"><?= lang('strategic_goals'); ?></h3>
                        <p><?= $goals; ?> .</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 core">
                    <img src="<?= $goals_image; ?>" class="w-100" alt="people"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end vision and mission-->
<?php include ('footer.php') ?>
