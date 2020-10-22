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
<?php include("include/rightContent.php"); ?>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
<?php include("include/footer.php"); ?>
    </body>
</html>