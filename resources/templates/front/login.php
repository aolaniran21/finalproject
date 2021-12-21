<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php"); ?>

<div class="container">
    <div class="row">
        <?php include(TEMPLATE_FRONT . DS . "sidenav.php"); ?>
        <div class="col-md-9">
            <h1>Dashboard</h1>
        </div>

    </div>

    <?php ?>
    <h1 class="page-header">
        Add User
        <small>Page</small>
    </h1>

    <div class="col-md-6 user_image_box">
        <span id="user_admin" class="fa fa-user fa-4x"></span>
    </div>

    <div class="col-md-6">
        <?php ?>
        <form action="" enctype="multipart/form-data" method="post">

            <div class="form-group">
                <input type="file" name="file" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>

            <div class="form-group">
                
                <input type="submit" name="login_unit" class="btn btn-primary btn-lg pull-right" value="Add User">
            </div>
        </form>



    </div>

</div>

<?php include(TEMPLATE_FRONT .DS. "footer.php"); ?>