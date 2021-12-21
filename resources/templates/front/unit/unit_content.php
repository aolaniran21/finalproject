<?php require_once("../../resources/config.php"); ?>

<h4>Dashboard</h4>


<!-- <div class="row">
            <h1 class="page-header">

            </h1>

            <h4><?php ?></h4>
        </div> -->

<div class="table">
    <table class="table table-hover">
        <thead>

            <tr>
                <th>Title</th>
                <th>Content</th>

                <th>Recipient</th>
            </tr>
        </thead>
        <tbody>
            <?php
            view_memo();
            ?>


        </tbody>
    </table>
    <!-- </div> -->
    <!-- </div> -->

</div>

<!-- <div class="col-md-12">


</div>-->