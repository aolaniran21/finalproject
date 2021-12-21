<?php require_once("../../resources/config.php"); ?>

<?php
include(TEMPLATE_FRONT . DS . "header.php");
?>
<!-- <div class="container"> -->
<!-- <div class="row"> -->
<?php
// include(TEMPLATE_FRONT . DS . "sidenav.php");
?>
<!-- <div class="col-md-9"> -->



<?php ?>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">

        <h1 class="page-header">
            Create New Memo
            <small></small>
        </h1>

        <!-- <div class="col-md-6 user_image_box">
    <span id="user_admin" class="fa fa-user fa-4x"></span>
</div> -->

        <!-- <div class="col-md-6"> -->
        <?php ?>

        <form action="" enctype="multipart/form-data" method="post">

            <?php
            register();
            ?>
            <!-- <div class="form-group">
                <label for="matric">matric</label>
                <input type="number" name="matric" placeholder="" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="firstname">firstname</label>
                <input type="text" name="firstname" placeholder="" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="matric">lastname</label>
                <input type="text" name="lastname" placeholder="" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" placeholder="" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>


                </select>
            </div>
            <div class="form-group">
                <label for="level">level</label>
                <select name="level" id="" class="form-control" required>
                    <option value="">Select Level</option>
                    <?php show_level(); ?>

                </select>
            </div>
            <div class="form-group">
                <label for="faculty">faculty</label>
                <select name="faculty" id="" class="form-control" required>
                    <option value="">Select Faculty</option>
                    <?php show_faculty(); ?>

                </select>
            </div>
            <div class="form-group">
                <label for="dept">department</label>
                <select name="dept" id="" class="form-control" required>
                    <option value="">Select Dept</option>
                    <?php show_dept(); ?>

                </select>
            </div>
            <div class="form-group">
                <label for="hall">hall</label>
                <select name="hall" id="" class="form-control" required>
                    <option value="">Select Hall</option>
                    <?php show_hall(); ?>

                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="" value="" class="form-control" required>
            </div> -->

            <br />
            <div class="form-group">

                <input type="submit" name="create_student" class="btn btn-primary btn-md pull-left" value="Register">
            </div>
        </form>

    </div>
</div>
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

<!-- </div> -->
<!-- </div> -->



<!-- </div> -->



<!-- </div> -->