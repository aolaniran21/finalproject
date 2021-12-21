<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<?php
if (!isset($_SESSION['post'])) {
    redirect("login_unit.php");
}


?>


<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <?php
        include(TEMPLATE_FRONT_UNIT . DS . "sidenav.php");
        ?>


        <div class="col py-4 d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                <div class="col ">
                    <?php

                    if ($_SERVER['REQUEST_URI'] == "/MemoManager/public/unit/" || $_SERVER['REQUEST_URI'] == "/MemoManager/public/unit/index.php") {
                        include(TEMPLATE_FRONT_UNIT . DS . "unit_content.php");
                    }

                    if (isset($_GET['create_memo'])) {
                        include(TEMPLATE_FRONT_UNIT . DS . "create_memo.php");
                    }
                    if (isset($_GET['edit_memo'])) {
                        include(TEMPLATE_FRONT_UNIT . DS . "edit_memo.php");
                    }
                    // if (isset($_GET['add_product'])) {
                    //     include(TEMPLATE_BACK . DS . "unit.php");
                    // }



                    ?>
                </div>
            </main>

        </div>
    </div>
</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>