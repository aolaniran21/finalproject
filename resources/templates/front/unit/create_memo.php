<?php require_once("../../resources/config.php"); ?>


<!-- <div class="container"> -->
<!-- <div class="row"> -->
<?php
// include(TEMPLATE_FRONT . DS . "sidenav.php");
?>
<!-- <div class="col-md-9"> -->



<?php ?>


<h4 class="page-header">
    Create New Memo
    <small></small>
</h4>

<!-- <div class="col-md-6 user_image_box">
    <span id="user_admin" class="fa fa-user fa-4x"></span>
</div> -->

<!-- <div class="col-md-6"> -->
<?php ?>

<form action="" enctype="multipart/form-data" method="post">

    <?php
    create_memo();
    ?>
    <div class="form-group">
        <label for="post_title">Title</label>
        <input type="text" name="title" placeholder="" value="" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="content"></label>
        <textarea name="mytextarea" id="" cols="20" rows="20" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="file">File Upload</label>
        <input type="file" name="file" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="level">Level</label>

        <select name="level" id="" class="form-control">
            <option value="">Select Category</option>
            <?php show_level(); ?>

        </select>


    </div>
    <div class="form-group">
        <label for="created_for">Share to</label>

        <select name="created_for" id="" class="form-control">
            <option value="">Select Category</option>
            <?php show_recipient2(); ?>

        </select>


    </div>

    <br />
    <div class="form-group">

        <input type="submit" name="create_memo" class="btn btn-primary btn-md pull-left" value="Share">
    </div>
</form>



<!-- </div> -->
<!-- </div> -->



<!-- </div> -->



<!-- </div> -->