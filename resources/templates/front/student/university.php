<?php require_once("../../resources/config.php"); ?>






<!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div> -->
<div class="container">
    <h4>University</h4>
    <div class='row'>
        <div class="col">
            <div class="card-header bg-info">
                New
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php new_university(); ?>

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
                    <?php old_university(); ?>

                </ul>
            </div>
        </div>
        <!-- <h5>Old</h5> -->

    </div>

</div>

<!-- <ol class='list-group'>
    <h5>New</h5>
    

</ol> -->