<?php include ('header.php') ?>
<!--start breadcrumb-->
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
</nav>
<!--end breadcrumb-->

<!--start slider-->
<div class="slidrr"></div>
<!--end slider-->
<script src="js/jquery-extend.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $.GoogleMapsAutocomplete({
                'AutoComplete': true,
                'MapConvas': 'map-canvas',
                'default_lat': <?= $long_loca ?>,
                'default_lng': <?= $lat_loca ?>,
                'zoom': 17
            });
        })
</script>
<!--start content-->
<div class="contact position-relative">
    <div class="row div-map-canvas" id="map-canvas"></div>
    <div class="lay-map">
        <div class="container">
            <div id="pattern" class="pattern text-center">
                <div class="map">
                    <a target="_blank" href="https://www.google.com/maps/@<?= $lat_loca ?>,<?= $long_loca ?>,17z" class="btn map-link">View Map</a>
                </div>
            </div>
            <div class="leave">
                <div class="row">
                    <?php
                        $query_contact = $con->query("SELECT * FROM `contact` order by id desc");
                        $row_contact = mysqli_fetch_array($query_contact);
                        $email = $row_contact['email'];
                        $phone = $row_contact['phone'];
                        $address = (lang('lang_key') == 'en' ? $row_contact['address_en'] : $row_contact['address']);

                        if (isset($_POST['submit'])) {
                            $name = mysqli_real_escape_string($con, trim($_POST['name']));
                            $phone = mysqli_real_escape_string($con, trim($_POST['phone']));
                            $email = mysqli_real_escape_string($con, trim($_POST['email']));
                            $content = mysqli_real_escape_string($con, trim($_POST['content']));

                            $con->query("INSERT INTO `messages` VALUES (NULL, '$name', '$phone', '$email', '$content' , current_timestamp());");
                        }
                    ?>
                    <div class="col-md-6 mx-auto">
                        <div class="message mt-3">
                            <form id="client_address_add" method="POST"  enctype="multipart/form-data" data-parsley-validate novalidate >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h4 class="m-t-0 header-title text-center text-dark"><b> Send A message    </b></h4>
                                            <div class="form-group">
                                                <input type="text" name="name" parsley-trigger="change"  placeholder="Write Your Name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" parsley-trigger="change"  placeholder="Write Your Phone Number" class="form-control" id="phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" parsley-trigger="change"  placeholder="Write Your E-Mail" class="form-control" id="email">
                                            </div>
                                            <br />

                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" name="content"  id='content' minlength="3" maxlength="1000" required=""></textarea>
                                            </div>
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" id="submit" name="submit"> Send </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->
<?php include ('footer.php') ?>
