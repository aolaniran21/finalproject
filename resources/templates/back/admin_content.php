<!-- FIRST ROW WITH PANELS -->
<!-- Page Heading -->
<!-- <div class="row">
    <div class="col-lg-12"> -->
<h1 class="page-header">
    Dashboard
</h1>
<!-- <ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> Dashboard
    </li>
</ol> -->
<!-- </div>
</div> -->
<!-- /.row -->
<div class="row bg-dark ">

    <div class="p-3 col-lg-3  col-md-3">
        <!-- <div class="panel panel-yellow"> -->
        <!-- <div class="panel-heading"> -->
        <div class="card">
            <div class="card-body">

                <h5 class="card-title"><i class="bi bi-people-fill fs-3"></i><span class="ms-2">Students</span></h5>
                <h6 class="card-subtitle mb-2 text-muted">Total: <?php admin_student_count(); ?></h6>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p> -->
                <a href="#" class="card-link">View Details</a>

            </div>
        </div>

        <!-- </div> -->

        <!-- </div> -->
    </div>
    <div class="p-3 col-lg-3  col-md-3">
        <!-- <div class="panel panel-yellow"> -->
        <!-- <div class="panel-heading"> -->
        <div class="card">
            <div class="card-body">

                <h5 class="card-title"><i class="bi bi-journal-text fs-3"></i><span class="ms-2">Messages</span></h5>
                <h6 class="card-subtitle mb-2 text-muted">Total: <?php admin_memo_count(); ?></h6>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p> -->
                <a href="#" class="card-link">View Details</a>

            </div>
        </div>

        <!-- </div> -->

        <!-- </div> -->
    </div>
    <div class="p-3 col-lg-3  col-md-3">
        <!-- <div class="panel panel-yellow"> -->
        <!-- <div class="panel-heading"> -->
        <div class="card">
            <div class="card-body">

                <h5 class="card-title"><i class="bi bi-person-workspace fs-3"></i><span class="ms-2">Units</span></h5>
                <h6 class="card-subtitle mb-2 text-muted">Total: <?php admin_unit_count(); ?></h6>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p> -->
                <a href="#" class="card-link">View Details</a>

            </div>
        </div>

        <!-- </div> -->

        <!-- </div> -->
    </div>
    <div class="p-3 col-lg-3  col-md-3">
        <!-- <div class="panel panel-yellow"> -->
        <!-- <div class="panel-heading"> -->
        <div class="card">
            <div class="card-body">

                <h5 class="card-title"><i class="bi bi-person fs-3"></i><span class="ms-2">Admins</span>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">Total: <?php admin_unit_admin_count(); ?></h6>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p> -->
                <a href="#" class="card-link">View Details</a>

            </div>
        </div>

        <!-- </div> -->

        <!-- </div> -->
    </div>





    <!-- <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Products!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Categories!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div> -->


</div>

<!-- /.row -->


<!-- SECOND ROW WITH TABLES-->

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="bi bi-journal-text fs-4"></i> Message Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Message #</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php dashboard_memo(); ?>

                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>







    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="bi bi-person-workspace fs-4"></i> Unit Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Admin #</th>
                                <th>Post</th>
                                <th>Email</th>
                                <th>Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php dashboard_unit_admin(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>







</div>
<!-- /.row -->