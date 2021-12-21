<?php require_once("../../resources/config.php"); ?>


<!-- <div class="container"> -->
<!-- <div class="row"> -->
<?php
include(TEMPLATE_BACK . DS . "header.php");
?>
<!-- <div class="col-md-9"> -->



<?php ?>

<div class="container h-100">

    <div class="row h-100 justify-content-center align-items-center" style="padding-top:100px">


        <!-- <div class="col-md-6 user_image_box">
            <span id="user_admin" class="fa fa-user fa-4x"></span>
        </div> -->

        <div class="col-md-6">
            <h3 class="page-header">
                Admin Login
                <small></small>
            </h3>


            <form action="" enctype="multipart/form-data" method="post">
                <?php login_admin(); ?>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="" value="" class="form-control" required>
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <br />
                <div class="form-group">

                    <input type="submit" name="login_admin" class="btn btn-primary btn-lg pull-right" value="Login">
                </div>
            </form>



            <!-- </div> -->
        </div>



    </div>



</div>



<?php include(TEMPLATE_BACK . DS . "footer.php"); ?>