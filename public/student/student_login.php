<?php require_once("../../resources/config.php"); ?>
<?php
include(TEMPLATE_FRONT . DS . "header.php");
?>
<?php ?>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center" style="padding-top:180px">
        <!-- <div class="col-md-6 user_image_box">
            <span id="user_admin" class="fa fa-user fa-4x"></span>
        </div> -->

        <div class="col-md-6">
            <?php display_message() ?>
            <h3 class="page-header">
                Student Login
                <small></small>
            </h3>
            <?php ?>
            <form action="" enctype="multipart/form-data" method="post">
                <?php
                student_login();
                ?>
                <div class="form-group">
                    <label for="matric">Matric Number</label>
                    <input type="number" name="matric" placeholder="" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <br />
                <div class="form-group">
                    <input type="submit" name="student_login" class="btn btn-primary btn-lg pull-right" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>