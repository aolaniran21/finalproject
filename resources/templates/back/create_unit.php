<?php require_once("../../resources/config.php"); ?>



<?php
// include(TEMPLATE_FRONT . DS . "sidenav.php");
?>




<?php ?>


<h4 class="page-header align-items-center">
    <a href="index.php?unit" class="btn" role="button">
        <i class="bi bi-arrow-left-circle-fill fs-3"></i>
    </a>
    Create Unit
    <small></small>
</h4>


<?php ?>


<form action="" enctype="multipart/form-data" method="post">

    <?php
    create_unit();
    ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="unit_name" placeholder="" value="" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="unit_type">Unit Type</label>

        <select name="unit_type" id="" class="form-control">
            <option value="">Select Category</option>
            <?php show_unit_type(); ?>

        </select>


    </div>



    <!-- <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="" class="form-control">
                    </div> -->
    <br>
    <div class="form-group">

        <input type="submit" name="create_unit" class="btn btn-primary btn-lg pull-right" value="Create Unit">
    </div>
</form>



<!-- </div> -->
<!-- </div> -->



<!-- </div> -->



<!-- </div> -->



<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>