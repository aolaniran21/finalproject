<?php require_once("../../resources/config.php"); ?>


<!-- <div class="container"> -->
<!-- <div class="row"> -->
<?php
// include(TEMPLATE_FRONT . DS . "sidenav.php");
?>
<!-- <div class="col-md-9"> -->



<?php ?>


<h4 class="page-header">
    Create Unit Admin
    <small></small>
</h4>

<!-- <div class="col-md-6 user_image_box">
    <span id="user_admin" class="fa fa-user fa-4x"></span>
</div> -->

<!-- <div class="col-md-6"> -->
<?php ?>

<form action="" enctype="multipart/form-data" method="post">

    <?php
    create_unit_admin();
    ?>
    <div class="form-group">
        <label for="name">Post</label>
        <input type="text" name="post" placeholder="" value="" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="type">Email</label>
        <input type="text" name="email" placeholder="" value="" class="form-control" required>
    </div>

    <!-- <div class="form-group">
        <label for="unit_type">Unit Type</label>

        <select name="unit_type" id="unit_type" class="form-control">
            <option value="">Select Unit Type</option>
            <?php  ?>

        </select>


    </div> -->
    <div class="form-group">
        <label for="unit">Unit</label>

        <select name="unit" id="unit" class="form-control">
            <option value="">Select Unit</option>
            <?php show_unit(); ?>

        </select>


    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="" class="form-control">
    </div>
    <br />
    <div class="form-group">

        <input type="submit" name="create_unit" class="btn btn-primary btn-lg pull-right" value="Create Unit Admin">
    </div>
</form>






<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>