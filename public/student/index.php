<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<?php
if (!isset($_SESSION['matric'])) {
    redirect("student_login.php");
}

?>


<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">

        <?php include(TEMPLATE_FRONT_STUDENT . DS . "sidenav.php"); ?>


        <div class="col py-4 d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                <div class="col ">
                    <?php
                    // message(); 
                    ?>
                    <?php
                    echo $_SESSION['login'];
                    echo $_SESSION['logout'];
                    if ($_SERVER['REQUEST_URI'] == "/MemoManager/public/student" || $_SERVER['REQUEST_URI'] == "/MemoManager/public/student/index.php") {
                        include(TEMPLATE_FRONT_STUDENT . DS . "university.php");
                    }

                    if (isset($_GET['university'])) {
                        include(TEMPLATE_FRONT_STUDENT . DS . "university.php");
                    }
                    if (isset($_GET['faculty'])) {
                        include(TEMPLATE_FRONT_STUDENT . DS . "faculty.php");
                    }
                    if (isset($_GET['dept'])) {
                        include(TEMPLATE_FRONT_STUDENT . DS . "dept.php");
                    }
                    if (isset($_GET['hall'])) {
                        include(TEMPLATE_FRONT_STUDENT . DS . "hall.php");
                    }




                    ?>
                </div>
            </main>

        </div>
    </div>
</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>