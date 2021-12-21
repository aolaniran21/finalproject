<?php require_once("../../resources/config.php") ?>
<?php
if (!isset($_SESSION['admin'])) {
    redirect("admin_login.php");
}

?>







<?php include(TEMPLATE_BACK . DS . "header.php"); ?>


<!-- <div class="col py-3"> -->
<div class="col min-vh-100 py-3">
    <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
        <i class="bi bi-list fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
    </button>

    <?php

    if ($_SERVER['REQUEST_URI'] == "/MemoManager/public/admin/" || $_SERVER['REQUEST_URI'] == "/MemoManager/public/admin/index.php") {
        include(TEMPLATE_BACK . DS . "admin_content.php");
    }

    if (isset($_GET['memo'])) {
        include(TEMPLATE_BACK . DS . "memo.php");
    }
    if (isset($_GET['students'])) {
        include(TEMPLATE_BACK . DS . "students.php");
    }
    if (isset($_GET['unit'])) {
        include(TEMPLATE_BACK . DS . "unit.php");
    }
    if (isset($_GET['memos'])) {
        include(TEMPLATE_BACK . DS . "memos.php");
    }
    if (isset($_GET['unit_admin'])) {
        include(TEMPLATE_BACK . DS . "unit_admin.php");
    }
    if (isset($_GET['create_unit'])) {
        include(TEMPLATE_BACK . DS . "create_unit.php");
    }
    if (isset($_GET['create_unit_admin'])) {
        include(TEMPLATE_BACK . DS . "create_unit_admin.php");
    }



    ?>
</div>
</div>
</div>
<!-- /.row -->





<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include(TEMPLATE_BACK . DS . "footer.php"); ?>