<?php require_once("../../resources/config.php"); ?>




<?php
if (isset($_GET['id'])) {
    $stmt = "SELECT * FROM message WHERE msg_id = " . escape_string($_GET['id']) . "";
    $result = query($stmt);
    confirm($result);

    while ($row = fetch_array($result)) {

        $title = escape_string($row['msg_title']);
        $content = escape_string($row['msg_content']);
        $file = escape_string($row['msg_file']);


        // $file = display_file($row['files']);
    }
}
?>
<div class="container">
    <div class="row">
        <a href="index.php?memo" class="nav-link px-sm-0 px-2" style="width: 10%;">
            <i class="fs-5 bi-back"></i></a>
        <h1 class="align-text-center" style="width: 50%;"><?php echo $title; ?></h1>
    </div>

</div>

<?php include(TEMPLATE_BACK . DS . "footer.php"); ?>