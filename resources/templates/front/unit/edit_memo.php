<?php require_once("../../resources/config.php"); ?>


<?php

if (isset($_GET['id'])) {

    $query = query("SELECT * FROM message WHERE msg_id = " . escape_string($_GET['id']) . "");
    confirm($query);

    while ($row = fetch_array($query)) {

        $title = escape_string($row['msg_title']);
        $content = escape_string($row['msg_content']);
        $file = escape_string($row['msg_file']);
        $level = escape_string($row['reciever_level']);
        $recipient = escape_string($row['reciever']);


        // $file = display_file($row['files']);
    }


    update_memo();
}
?>
<!-- <div class="container"> -->
<!-- <div class="row"> -->
<?php
// include(TEMPLATE_FRONT . DS . "sidenav.php");
?>
<!-- <div class="col-md-9"> -->



<?php ?>
<h4 class="page-header">
    Edit Memo
    <small></small>
</h4>

<!-- <div class="col-md-6 user_image_box">
    <span id="user_admin" class="fa fa-user fa-4x"></span>
</div> -->

<!-- <div class="col-md-6"> -->
<?php ?>
<form action="" enctype="multipart/form-data" method="post">


    <div class="form-group">
        <label for="title">File Upload</label>
        <input type="text" name="title" id="" class="form-control" value="<?php echo $title; ?>">
    </div>
    <div class=" form-group">
        <label for="content"></label>
        <textarea name="content" id="mytextarea" cols="30" rows="30"
            class="form-control"><?php echo $content; ?></textarea>
    </div>

    <div class="form-group">
        <label for="file">File Upload</label>

        <div class="row">
            <div class="col-md-6">

                <input type="file" name="file" id="" class="form-control" placeholder="<?php echo $file; ?>"
                    value="<?php echo $file; ?>">
            </div>
            <div class="col-md-6">
                <span class="form-text">

                    <p><?php echo $file; ?></p>
                </span>


            </div>
        </div>

    </div>

    <div class="form-group">
        <label for="level">Level</label>

        <select name="level" id="" class="form-control">
            <option value="<?php echo $level; ?>"><?php echo show_level_name($level); ?></option>
            <?php show_level(); ?>

        </select>


    </div>
    <div class="form-group">
        <label for="created_for">Share to</label>

        <select name="created_for" id="" class="form-control">
            <option value="<?php echo $recipient; ?>"><?php echo show_recipient($recipient); ?></option>
            <?php show_recipient2(); ?>

        </select>


    </div>
    <br />

    <div class="form-group">

        <input type="submit" name="edit_memo" class="btn btn-primary btn-md pull-left" value="Edit">
    </div>
</form>



<!-- </div> -->
<!-- </div> -->



<!-- </div> -->



<!-- </div> -->