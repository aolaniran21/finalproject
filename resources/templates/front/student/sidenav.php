<div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
    <div
        class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
        <a href="index.php"
            class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5">UI<span class="d-none d-sm-inline">Memo</span></span>
        </a>
        <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
            id="menu">
            <!-- <li class="nav-item">
                <a href="index.php" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="index.php?university" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">University</span> </a>
            </li> -->
            <li>
                <a href="index.php?university" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">University</span><span
                        class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline"
                        id="unimsg"><?php uni_notification(); ?></span></a>

            </li>
            <!-- <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">University</span>
                </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="index.php?university" class="nav-link px-0"><i class="fs-4 bi-speedometer2"></i> <span
                                class="ms-1 d-none d-sm-inline">Registry</span>
                            <span
                                class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline"><?php  ?></span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="ms-1 d-none d-sm-inline">SUG</span> 2
                        </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="index.php?faculty" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Faculty</span><span
                        class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline"><?php fac_notification(); ?></span></a>
            </li>
            <!-- <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Faculty</span>
                </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="index.php?faculty" class="nav-link px-0"><i class="fs-4 bi-speedometer2"></i> <span
                                class="ms-1 d-none d-sm-inline">Dean's
                                Office</span>
                            <span class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline">14</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="ms-1 d-none d-sm-inline">Faculty Assoc
                            </span>
                            2 </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="index.php?dept" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Department</span><span
                        class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline"><?php dept_notification(); ?></span></a>
            </li>
            <!-- <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2 ">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Department</span>
                </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="index.php?dept" class="nav-link px-0"><i class="fs-4 bi-speedometer2"></i> <span
                                class="ms-1 d-none d-sm-inline">HOD's
                                Office</span>
                            <span class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline">14</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="ms-1 d-none d-sm-inline">Dept
                                Assoc</span> 2 </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="index.php?hall" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Hall</span><span
                        class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline"></span></a>
            </li>
            <!-- <li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Bootstrap</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="index.php?edit_memo" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Edit Memo</span></a>
            </li> -->
            <!-- <li>
                <a href="#" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Customers</span> </a>
            </li> -->
        </ul>
        <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="" alt="" width="28" height="28" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['matric'] ?></span>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> -->
                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>