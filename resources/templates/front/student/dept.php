<?php require_once("../../resources/config.php"); ?>



<div class="container">
    <h4><?php echo show_dept_name($_SESSION['dept']) ?></h4>

    <div class='row'>
        <div class="col">
            <div class="card-header bg-info">
                New
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php new_department(); ?>

                </ul>
            </div>
        </div>
        <!-- <h5>Old</h5> -->

    </div>
    <div class='row'>
        <div class="col">
            <div class="card-header bg-blue bg-secondary">
                Old
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php old_department(); ?>

                </ul>
            </div>
        </div>
        <!-- <h5>Old</h5> -->

    </div>

</div>