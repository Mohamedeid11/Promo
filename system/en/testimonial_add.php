<?php
include("config.php");
if (!loggedin()) {
    header("Location: login.php");
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
    if (isset($_POST['submit'])) {
        $photo_name = $_FILES['image']['name'];
        $photo_tmp = $_FILES['image']['tmp_name'];

        $con->query("INSERT INTO `testimonial` VALUES (Null ,'$sliderImage',current_timestamp())");

        $id = mysqli_insert_id($con);
        if (!file_exists("../api/uploads/testimonial/" . $id)) {
            mkdir("../api/uploads/testimonial/" . $id, 0777, true);
        }
        $image_path = "../api/uploads/testimonial/" . $id . "/" . $photo_name;
        $image_database = "{$sit_url}/api/uploads/testimonial/" . $id . "/" . $photo_name;

        if (move_uploaded_file($photo_tmp, $image_path)) {
            $update = $con->query("UPDATE `testimonial` SET  `image`='$image_database' WHERE `id`='$id'");
        }
        echo get_success(" Added Successfully ");
    }
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Clients  </h4>
                        <ol class="breadcrumb">
                            <li><a href="testimonial_view.php">Clients </a></li>
                            <li class="active"> Add New Client   </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                                <div class="form-group m-b-0">
                                    <label class="control-label">Image</label>
                                    <input type="file" name="image" id="image" class="filestyle" data-buttonname="btn-primary">
                                </div>
                                <br>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                        Add
                                    </button>
                                    <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancell
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
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