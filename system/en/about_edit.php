<?php
include("config.php");
if (!loggedin()) {
    header("Location: login.php");
    exit();
}if (($_SESSION['about'] != '1')) {
    header("Location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

    <?php include("include/heads.php"); ?>
    <body class="fixed-left">

        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include("include/topbar.php"); ?>
            <!-- Top Bar End -->

            <!-- Left Sidebar Start -->
            <?php include("include/leftsidebar.php"); ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php
// error_reporting(0);

            if (isset($_POST['user_update'])) {

                $id = $_POST['id'];

                $title = $_POST['title'];

                $content = $_POST['content'];

                $title_en = $_POST['title_en'];

                $content_en = $_POST['content_en'];

                $vision_en = $_POST['vision_en'];
                $vision_ar = $_POST['vision_ar'];

                $mission_en = $_POST['mission_en'];
                $mission_ar = $_POST['mission_ar'];

                $goals_en = $_POST['goals_en'];
                $goals_ar = $_POST['goals_ar'];


                if (isset($_FILES['image_update']['name']) && !empty($_FILES['image_update']['name'])) {
                    $image_ext_old_1 = $_POST['image_ext_old'];
                    $mostafa = explode('/', $image_ext_old_1);
                    $image_name = $mostafa[7];
                    $full_img_path = dirname(__FILE__) . "/../api/uploads/about/{$image_name}";
                    if (file_exists($full_img_path)) {
                        @unlink($full_img_path);
                    }
                    $image_name_vision = $_FILES['image_update']['name'];
                    $image_tmp_vision = $_FILES['image_update']['tmp_name'];
                    $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $get_image_ext = explode('.', $image_name_vision);
                    $image_ext = strtolower(end($get_image_ext));

                    $image_path = "../api/uploads/about/" . $image_name_vision;

                    $image_logo = "{$sit_url}/api/uploads/about/{$image_name_vision}";

                    $update = $con->query("UPDATE `about` SET  `title` = '$title', `content` = '$content', `title_en` = '$title_en', `content_en` = '$content_en', `image` = '$image_logo', `vision_en` = '$vision_en', `vision_ar` = '$vision_ar', `mission_en` = '$mission_en', `mission_ar` = '$mission_ar', `goals_en` = '$goals_en', `goals_ar` = '$goals_ar' WHERE `id`='$id'");


                    if (move_uploaded_file($image_tmp_vision, $image_path)) {

                        $thumb = new easyphpthumbnail;

                        $thumb->Thumbsize = 150;

                        $thumb->Createthumb($image_path, 'file');

                        // to Prevent Duplicate The Same Image (We Will Delete The Image In The Folder That Contain Class)


                        $same_path = dirname(__FILE__) . "/" . $image_name_vision;

                        if (copy($same_path, $image_tmp_vision)) {
                            unlink($same_path);
                        }
                    }
                }
                if (isset($_FILES['vision_image']['name']) && !empty($_FILES['vision_image']['name'])) {
                    $image_ext_old_1 = $_POST['image_ext_old_1'];
                    $mostafa = explode('/', $image_ext_old_1);
                    $image_name = $mostafa[7];
                    $full_img_path = dirname(__FILE__) . "/../api/uploads/about/{$image_name}";
                    if (file_exists($full_img_path)) {
                        @unlink($full_img_path);
                    }
                    $image_name_vision = $_FILES['vision_image']['name'];
                    $image_tmp_vision = $_FILES['vision_image']['tmp_name'];
                    $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $get_image_ext = explode('.', $image_name_vision);
                    $image_ext = strtolower(end($get_image_ext));

                    $image_path = "../api/uploads/about/" . $image_name_vision;

                    $image_vision = "{$sit_url}/api/uploads/about/{$image_name_vision}";

                    $update = $con->query("UPDATE `about` SET  `title` = '$title', `content` = '$content', `title_en` = '$title_en', `content_en` = '$content_en', `vision_en` = '$vision_en', `vision_ar` = '$vision_ar', `vision_image` = '$image_vision', `mission_en` = '$mission_en', `mission_ar` = '$mission_ar', `goals_en` = '$goals_en', `goals_ar` = '$goals_ar' WHERE `id`='$id'");


                    if (move_uploaded_file($image_tmp_vision, $image_path)) {

                        $thumb = new easyphpthumbnail;

                        $thumb->Thumbsize = 150;

                        $thumb->Createthumb($image_path, 'file');

                        // to Prevent Duplicate The Same Image (We Will Delete The Image In The Folder That Contain Class)


                        $same_path = dirname(__FILE__) . "/" . $image_name_vision;

                        if (copy($same_path, $image_tmp_vision)) {
                            unlink($same_path);
                        }
                    }
                }

                if (isset($_FILES['mission_image']['name']) && !empty($_FILES['mission_image']['name'])) {
                    $image_ext_old_2 = $_POST['image_ext_old_2'];
                    $mostafa = explode('/', $image_ext_old_2);
                    $image_name = $mostafa[7];
                    $full_img_path = dirname(__FILE__) . "/../api/uploads/about/{$image_name}";
                    if (file_exists($full_img_path)) {
                        @unlink($full_img_path);
                    }
                    $image_name_mission = $_FILES['mission_image']['name'];
                    $image_tmp_mission = $_FILES['mission_image']['tmp_name'];
                    $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $get_image_ext = explode('.', $image_name_mission);
                    $image_ext = strtolower(end($get_image_ext));

                    $image_path = "../api/uploads/about/" . $image_name_mission;

                    $image_mission = "{$sit_url}/api/uploads/about/{$image_name_mission}";

                    $update = $con->query("UPDATE `about` SET `title` = '$title', `content` = '$content', `title_en` = '$title_en', `content_en` = '$content_en', `vision_en` = '$vision_en', `vision_ar` = '$vision_ar',`mission_en` = '$mission_en', `mission_ar` = '$mission_ar',`mission_image` = '$image_mission', `goals_en` = '$goals_en', `goals_ar` = '$goals_ar' WHERE `id`='$id'");


                    if (move_uploaded_file($image_tmp_mission, $image_path)) {

                        $thumb = new easyphpthumbnail;

                        $thumb->Thumbsize = 150;

                        $thumb->Createthumb($image_path, 'file');

                        // to Prevent Duplicate The Same Image (We Will Delete The Image In The Folder That Contain Class)


                        $same_path = dirname(__FILE__) . "/" . $image_name_mission;

                        if (copy($same_path, $image_tmp_mission)) {
                            unlink($same_path);
                        }
                    }
                }

                if (isset($_FILES['goals_image']['name']) && !empty($_FILES['goals_image']['name'])) {
                    $image_ext_old_3 = $_POST['image_ext_old_3'];
                    $mostafa = explode('/', $image_ext_old_3);
                    $image_name = $mostafa[7];
                    $full_img_path = dirname(__FILE__) . "/../api/uploads/about/{$image_name}";
                    if (file_exists($full_img_path)) {
                        @unlink($full_img_path);
                    }
                    $image_name_goals = $_FILES['goals_image']['name'];
                    $image_tmp_goals = $_FILES['goals_image']['tmp_name'];
                    $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $get_image_ext = explode('.', $image_name_goals);
                    $image_ext = strtolower(end($get_image_ext));

                    $image_path = "../api/uploads/about/" . $image_name_goals;

                    $image_goals = "{$sit_url}/api/uploads/about/{$image_name_goals}";

                    $update = $con->query("UPDATE `about` SET `title` = '$title', `content` = '$content', `title_en` = '$title_en', `content_en` = '$content_en', `vision_en` = '$vision_en', `vision_ar` = '$vision_ar',  `mission_en` = '$mission_en', `mission_ar` = '$mission_ar', `goals_en` = '$goals_en', `goals_ar` = '$goals_ar', `goals_image` = '$image_goals'  WHERE `id`='$id'");


                    if (move_uploaded_file($image_tmp_goals, $image_path)) {

                        $thumb = new easyphpthumbnail;

                        $thumb->Thumbsize = 150;

                        $thumb->Createthumb($image_path, 'file');

                        // to Prevent Duplicate The Same Image (We Will Delete The Image In The Folder That Contain Class)


                        $same_path = dirname(__FILE__) . "/" . $image_name_goals;

                        if (copy($same_path, $image_tmp_goals)) {
                            unlink($same_path);
                        }
                    }
                }
            else {
                    $update = $con->query("UPDATE `about` SET  
                                                    `title` = '$title', 
                                                    `content` = '$content', 
                                                    `title_en` = '$title_en', 
                                                    `content_en` = '$content_en', 
                                                    `vision_en` = '$vision_en', 
                                                    `vision_ar` = '$vision_ar', 
                                                    `mission_en` = '$mission_en', 
                                                    `mission_ar` = '$mission_ar', 
                                                    `goals_en` = '$goals_en', 
                                                    `goals_ar` = '$goals_ar' 
                                                    WHERE `id`='$id'");
                }

                if ($update) {
                    echo get_success("Successfully updated");
                } else {
                    echo get_error("Here's a error!");
                }
            }
            ?>


            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">About Us</h4>
                                <ol class="breadcrumb">
                                    <!--<li><a href="user_add.php">المديرين</a></li>-->
                                    <!--<li class="active">تعديل مدير</li>-->
                                </ol>
                            </div>
                        </div>

                        <div class="updateData"></div>

                        <?php
                        if ($_GET['id']) {

                            $id = $_GET['id'];

                            $query_select = $con->query("SELECT * FROM `about` WHERE `id` = '{$id}' LIMIT 1");
                            $row_select = mysqli_fetch_array($query_select);

                            $id = $row_select['id'];
                            $title = $row_select['title'];
                            $content = $row_select['content'];
                            $title_en = $row_select['title_en'];
                            $content_en = $row_select['content_en'];
                            $logo_image = $row_select['image'];
                            $vision_en = $row_select['vision_en'];
                            $vision_ar = $row_select['vision_ar'];
                            $vision_image = $row_select['vision_image'];
                            $mission_en = $row_select['mission_en'];
                            $mission_ar = $row_select['mission_ar'];
                            $mission_image = $row_select['mission_image'];
                            $goals_en = $row_select['goals_en'];
                            $goals_ar = $row_select['goals_ar'];
                            $goals_image = $row_select['goals_image'];

                            $get_image_ext = explode('.', $logo_image);
                              strtolower(end($get_image_ext));
                            if ($query_select) {
                                ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <form method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                                                <input type="hidden" name="id" id="id" parsley-trigger="change" required value="<?php echo $id; ?>" class="form-control">

                                                <div class="form-group">
                                                    <label for="title">Arabic Title</label>
                                                    <input type="text" name="title" id="title" parsley-trigger="change" required value="<?php echo $title; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="content">Arabic Content</label>
                                                    <textarea class="form-control" rows="3" name="content"  minlength="3" maxlength="1000" required=""><?php echo $content; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">English Title</label>
                                                    <input type="text" name="title_en" id="title_en" parsley-trigger="change" required value="<?php echo $title_en; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_en">English Content</label>
                                                    <textarea class="form-control" rows="3" name="content_en"  minlength="3" maxlength="1000" required=""><?php echo $content_en; ?></textarea>
                                                </div>
                                                <input type="hidden" name="image_ext_old" value="<?php echo $logo_image; ?>" />
                                                <div class="form-group m-b-0">
                                                    <label for="about">Edit Logo </label>

                                                    <div class="gal-detail thumb getImage">
                                                        <a href="<?php echo $logo_image; ?>" class="image-popup" title="<?php echo $title; ?>">
                                                            <img src="<?php echo $logo_image; ?>" class="thumb-img" alt="<?php echo $title; ?>">
                                                        </a>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label">Header Image    </label>
                                                        <input type="file" name="image_update" id="image_update" class="filestyle" data-buttonname="btn-primary">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

<!--                                               Start  Vision-->
                                                <div class="form-group">
                                                    <label >English Vision</label>
                                                    <textarea class="form-control" rows="3" name="vision_en"  minlength="3" maxlength="1000" id = "vision_en"required=""><?php echo $vision_en; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_en">Arabic Vision</label>
                                                    <textarea class="form-control" rows="3" name="vision_ar"  minlength="3" maxlength="1000" id = "vision_ar"required=""><?php echo $vision_ar; ?></textarea>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <label for="about">Edit Vision Image  </label>

                                                    <div class="gal-detail thumb getImage">
                                                        <input type="hidden" name="image_ext_old_1" value="<?php echo $vision_image; ?>" />
                                                        <a href="<?php echo $vision_image; ?>" class="image-popup" title="Vision">
                                                            <img src="<?php echo $vision_image; ?>" class="thumb-img" alt="Vision">
                                                        </a>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label">Header Image    </label>
                                                        <input type="file" name="vision_image" id="vision_image" class="filestyle" data-buttonname="btn-primary">
                                                    </div>
                                                </div>

                                                <br>
                                                <br>
                                                <br>

<!--                                                Start Mission-->
                                                <div class="form-group">
                                                    <label for="content_en">English Mission</label>
                                                    <textarea class="form-control" rows="3" name="mission_en"  minlength="3" maxlength="1000" id = "mission_en"required=""><?php echo $mission_en; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_en">Arabic Mission</label>
                                                    <textarea class="form-control" rows="3" name="mission_ar"  minlength="3" maxlength="1000" id = "mission_ar"required=""><?php echo $mission_ar; ?></textarea>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <label for="about">Edit Mission Image </label>

                                                    <div class="gal-detail thumb getImage">
                                                        <input type="hidden" name="image_ext_old_2" value="<?php echo $mission_image; ?>" />

                                                        <a href="<?php echo $mission_image; ?>" class="image-popup" title="Vision">
                                                            <img src="<?php echo $mission_image; ?>" class="thumb-img" alt="Vision">
                                                         </a>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label">Header Image    </label>
                                                        <input type="file" name="mission_image" id="mission_image" class="filestyle" data-buttonname="btn-primary">
                                                    </div>
                                                </div>

                                                <br>
                                                <br>
                                                <br>
                                                <br>
<!--                                                Start Goals-->
                                                <div class="form-group">
                                                    <label for="content_en">English Goals</label>
                                                    <textarea class="form-control" rows="3" name="goals_en"  minlength="3" maxlength="1000" id = "goals_en"required=""><?php echo $goals_en; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_en">Arabic Goals</label>
                                                    <textarea class="form-control" rows="3" name="goals_ar"  minlength="3" maxlength="1000" id = "goals_ar"required=""><?php echo $goals_ar; ?></textarea>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <label for="about">Edit Goals Image </label>

                                                    <div class="gal-detail thumb getImage">
                                                        <input type="hidden" name="image_ext_old_3" value="<?php echo $goals_image; ?>" />

                                                        <a href="<?php echo $goals_image; ?>" class="image-popup" title="Goals">
                                                            <img src="<?php echo $goals_image; ?>" class="thumb-img" alt="Goals">
                                                        </a>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label">Header Image    </label>
                                                        <input type="file" name="goals_image" id="goals_image" class="filestyle" data-buttonname="btn-primary">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit" name="user_update" id="updateUser">Update</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div>
                <?php include("include/footer_text.php"); ?>

            </div>

            <!-- End Right content here -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <?php include("include/rightbar.php"); ?>
            </div>
            <!-- /Right-bar -->
        </div>
        <!-- END wrapper -->
        <?php include("include/footer.php"); ?>


    </body>
</html>