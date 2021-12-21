<?php
// echo 'required';
/***********************HELPER FUNCTION*****************/
$file_directory = 'files';

function set_message($msg)
{
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location)
{
    header("Location: $location");
}

function query($sql)
{
    global $db_conn;

    return $db_conn->query($sql);
}

function confirm($result)
{
    global $db_conn;

    if (!$result) {
        $db_conn->error;;
    }

    // echo ('confrimed');
}

function escape_string($string)
{
    global $db_conn;

    return mysqli_real_escape_string($db_conn, $string);
}

function fetch_array($result)
{
    return $result->fetch_assoc();
}

function display_file($file)
{
    global $file_directory;

    return $file_directory . DS . $file;
}
function last_id()
{
    global $db_conn;
    return $db_conn->insert_id;
}
function show_recipient($rec_id)
{
    $stmt = "SELECT * FROM recipients WHERE rec_id='{$rec_id}'";
    $recipient_query = query($stmt);
    confirm($recipient_query);
    if ($recipient_query->num_rows > 0) {
        while ($reciever = $recipient_query->fetch_array()) {
            return $reciever['rec_name'];
        }
    }
}
function show_sender($admin_id)
{
    $stmt = "SELECT * FROM unit_admin, unit WHERE unit_admin.admin_id='{$admin_id}' AND unit_admin.unit = unit.unit_id";
    $result = query($stmt);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($sender = $result->fetch_array()) {
            return $sender['unit_name'];
        }
    }
}

function sender_unit_type($admin_id)
{
    $stmt = "SELECT * FROM unit_admin, unit, unit_type WHERE unit_admin.admin_id='{$admin_id}' 
            AND unit_admin.unit = unit.unit_id 
            AND unit.unit_type = unit_type.type_id";
    $result = query($stmt);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($sender_unit_type = $result->fetch_array()) {
            return $sender_unit_type['type_name'];
        }
    } else {
        echo 'empty';
    }
}
function sender_unit()
{
}

function show_dept_type($admin_id)
{
    $stmt = "SELECT * FROM dept, unit_type WHERE dept.dept_id='{$admin_id}' AND dept.type = unit_type.type_id";
    $result = query($stmt);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($dept_type = $result->fetch_array()) {
            return $dept_type['type_name'];
        }
    }
    // $statement = "SELECT * FROM unit_type WHERE type_id='{$type_id}'";
    // $result = query($statement);
    // confirm($result);
    // if ($result->num_rows > 0) {
    //     while ($unit_type = $result->fetch_array()) {
    //         return $unit_type['type_name'];
    //     }
    // }
}
function show_recipient2()
{
    $query = query("SELECT * FROM recipients");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $rec_id = $row['rec_id'];
        $rec_name = $row['rec_name'];
        # code...
        // $type_radio = "<div class='form-check'>
        // <label classs='form-check-label' for='created_for'>{$rec_name}</label>

        // <input type='radio' name='created_for' id='created_for' class='form-check-input' value='{$rec_id}'>
        // </div>";

        // echo $type_radio;
        $rec_options = "<option value='{$rec_id}'>{$rec_name}</option>";

        echo $rec_options;
    }
}
function show_faculty()
{
    $query = query("SELECT * FROM faculty");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $fac_id = $row['fac_id'];
        $fac_name = $row['fac_name'];

        $fac_options = "<option value='{$fac_id}'>{$fac_name}</option>";

        echo $fac_options;
    }
}
function show_dept()
{
    $query = query("SELECT * FROM dept");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $dept_id = $row['dept_id'];
        $dept_name = $row['dept_name'];

        $dept_options = "<option value='{$dept_id}'>{$dept_name}</option>";

        echo $dept_options;
    }
}
function show_level()
{
    $query = query("SELECT * FROM level");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $level_id = $row['level_id'];
        $level_name = $row['level_name'];

        $level_options = "<option value='{$level_id}'>{$level_name}</option>";

        echo $level_options;
    }
}
function show_level_name()
{
    $query = query("SELECT * FROM level");
    confirm($query);

    while ($level = $query->fetch_array()) {

        return $level['level_name'];
    }
}
function show_hall()
{
    $query = query("SELECT * FROM hall");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $hall_id = $row['hall_id'];
        $hall_name = $row['hall_name'];

        $hall_options = "<option value='{$hall_id}'>{$hall_name}</option>";

        echo $hall_options;
    }
}
function show_status()
{
    $query = query("SELECT * FROM status");
    confirm($query);

    while ($row = $query->fetch_array()) {

        $status_id = $row['status_id'];
        $status_name = $row['status_name'];

        $status_options = "<option value='{$status_id}'>{$status_name}</option>";

        echo $status_options;
    }
}
function unit_type_name($type_id)
{
    $statement = "SELECT * FROM unit_type WHERE type_id='{$type_id}'";
    $result = query($statement);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($unit_type = $result->fetch_array()) {
            return $unit_type['type_name'];
        }
    }
}
function show_unit_name($unit_id)
{
    $statement = "SELECT * FROM unit WHERE unit_id='{$unit_id}'";
    $result = query($statement);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($unit = $result->fetch_array()) {
            return $unit['unit_name'];
        }
    }
}
function show_unit_type()
{
    $query = query("SELECT * FROM unit_type");
    confirm($query);

    while ($row = $query->fetch_array()) {
        # code...
        $type_options = "<option value='{$row['type_id']}'>{$row['type_name']}</option>";

        echo $type_options;
    }
}
function show_unit()
{
    $query = query("SELECT * FROM unit");
    confirm($query);

    while ($row = $query->fetch_array()) {
        # code...
        $type_options = "<option value='{$row['unit_id']}'>{$row['unit_name']}</option>";

        echo $type_options;
    }
}
function show_unit2($unitType)
{
    $query = query("SELECT * FROM unit WHERE unit_type = '{$unitType}'");
    confirm($query);

    while ($row = $query->fetch_array()) {
        # code...
        $type_options = "<option value='{$row['unit_id']}'>{$row['unit_name']}</option>";

        echo $type_options;
    }
}

function show_faculty_name($fac_id)
{
    $statement = "SELECT * FROM faculty WHERE fac_id='{$fac_id}'";
    $result = query($statement);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($fac = $result->fetch_array()) {
            return $fac['fac_name'];
        }
    }
}
function show_dept_name($dept_id)
{
    $statement = "SELECT * FROM dept WHERE dept_id='{$dept_id}'";
    $result = query($statement);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($dept = $result->fetch_array()) {
            return $dept['dept_name'];
        }
    }
}
function show_hall_name($hall_id)
{
    $statement = "SELECT * FROM hall WHERE hall_id='{$hall_id}'";
    $result = query($statement);
    confirm($result);
    if ($result->num_rows > 0) {
        while ($hall = $result->fetch_array()) {
            return $hall['hall_name'];
        }
    }
}
function download()
{
    if (isset($_GET['path'])) {
        //Read the url
        $url = $_GET['path'];

        //Clear the cache
        clearstatcache();

        //Check the file path exists or not
        if (file_exists($url)) {

            //Define header information
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($url) . '"');
            header('Content-Length: ' . filesize($url));
            header('Pragma: public');

            //Clear system output buffer
            flush();

            //Read the size of the file
            readfile($url, true);

            //Terminate from the script
            die();
        } else {
            echo "File path does not exist.";
        }
    }
    echo "File path is not defined.";
}
/************************************************************STUDENT MODULE ***********************************************/
/********************LOGIN AND REGISTRATION *************************************/
function register()
{
    // if (isset($_POST['create_student'])) {
    // $matric = escape_string($_POST['matric']);
    // $firstname = escape_string($_POST['firstname']);
    // $lastname = escape_string($_POST['lastname']);
    // $email = escape_string($_POST['email']);
    // $gender = escape_string($_POST['gender']);
    // $faculty = escape_string($_POST['faculty']);
    // $dept = escape_string($_POST['dept']);
    // $hall = escape_string($_POST['hall']);
    // $slevel = escape_string($_POST['level']);
    // $password = escape_string($_POST['password']);

    // $stmt = "INSERT INTO student(matric, firstname, lastname, email, gender, faculty, dept, hall, slevel, password, created_at) 
    // VALUES('{$matric}','{$firstname}','{$lastname}', '{$email}', '{$gender}', '{$faculty}', '{$dept}', '{$hall}', '{$slevel}', '{$password}', now())";
    // $result = query($stmt);
    // confirm($result);
    // $stmt = "INSERT INTO student(matric, firstname, lastname, email, gender, faculty, dept, hall, slevel, password, created_at, login_time, logout_time) 
    // VALUES('123455','ayodeji','olaniran', 'ayodejiolaniran@gmail.com', Male, '1', '2', '3', '4', '123456', now(), now(), now())";
    // $result = query($stmt);
    // confirm($result);

    // echo ("Error description: " . $result->error);
    // set_message('Student Registered');
    // redirect('index.php?student_login');
    // }
}

function student_login()
{
    if (isset($_POST['student_login'])) {
        $matric = escape_string($_POST['matric']);
        $password = escape_string($_POST['password']);
        $login_time = date("Y-m-d H:i:s");
        $insert_login = query("UPDATE student SET login_time = now() WHERE matric = '{$matric}'");
        confirm($insert_login);
        $query = query("SELECT * FROM student WHERE matric = '{$matric}' AND password = '{$password}'");
        confirm($query);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_array()) {
                $_SESSION['matric'] = $row['matric'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['faculty'] = $row['faculty'];
                $_SESSION['dept'] = $row['dept'];
                $_SESSION['hall'] = $row['hall'];
                $_SESSION['created_at'] = $row['created_at'];
                $_SESSION['login'] = $row['login_time'];
                $_SESSION['logout'] = $row['logout_time'];


                // $_SESSION['matric'] = $matric;
                // $_SESSION['matric'] = $matric;
                // $_SESSION['matric'] = $matric;
                // $_SESSION['matric'] = $matric;
            }


            // set_message('Welcome');

            redirect('index.php');
        } else {
            // set_message('Wrong Username or Password');
            echo 'Wrong Username or Password';
            redirect('student_login.php');
        }
    }
}
/******************************MESSAGE FUNCTIONS */
function uni_notification()
{
    $stmt = "SELECT COUNT(message.msg_id) as total FROM message, recipients, student 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'all students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'
    AND message.created_at >= student.logout_time";
    $result = query($stmt);
    confirm($result);

    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $count = $row['total'];
        echo $count;
    } else {
        return 0;
    }
}
function dept_notification()
{
    $stmt = "SELECT COUNT(message.msg_id) as total FROM message, recipients, student 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'dept students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'
    AND message.created_at >= student.logout_time";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $count = $row['total'];
        echo $count;
    } else {
        return 0;
    }
}
function fac_notification()
{
    $stmt = "SELECT COUNT(message.msg_id) as total FROM message, recipients, student 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'faculty students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'
    AND message.created_at >= student.logout_time";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $count = $row['total'];
        echo $count;
    } else {
        return 0;
    }
}
function hall_notification()
{
    $stmt = "SELECT COUNT(message.msg_id) as total FROM message, recipients, student 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'hall students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'
    AND message.created_at >= student.logout_time";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $count = $row['total'];
        echo $count;
    } else {
        return 0;
    }
}

function notification()
{
    $uni = uni_notification();
    $dept = dept_notification();
    $fac = fac_notification();

    $notif = $uni + $dept + $fac;
    if ($notif < 0) {
        echo $notif + 1;
    }
}
// function message()
// {
//     $stmt = "SELECT * FROM message, student";
//     $result = query($stmt);
//     confirm($result);

//     while ($row = $result->fetch_array()) {
//         $id = $row['msg_id'];
//         $title = $row['msg_title'];
//         $content = $row['msg_content'];
//         // 'body' => html_entity_decode($row['body']),
//         $file = $row['msg_file'];
//         $sender = show_sender($row['sender']);
//         $recipient = show_recipient($row['reciever']);
//         $created_at = $row['created_at'];
//         $faculty = $row['faculty'];
//         $dept = $row['dept'];
//         if ($recipient == "all student") {
//             echo "all student";
//         }
//         if ($sender == $faculty && $recipient == "faculty students") {
//             echo "another";
//         }
//         if ($sender == $dept && $recipient == "dept students") {
//             echo "another";
//         }
//     }
// }

function university_count()
{
    $stmt = "SELECT  reciever_level, created_at, COUNT(message.msg_id) as total 
    FROM message, recipients
    WHERE message.reciever = recipients.rec_id AND recipients.rec_name = 'all students'
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'";

    $statement = "SELECT COUNT(msg_id) as total FROM message
    FULL JOIN recipients ON message.reciever = recipients.rec_id  
    WHERE recipients.rec_name = 'all students' 
    AND (message.reciever = '7' OR message.reciever = '{$_SESSION['level']}') 
     ";
    $result = query($stmt);
    confirm($result);
    // $row = $result->fetch_array();
    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $reciever_level = $row['reciever_level'];
        $count = $row['total'];


        // if () {
        if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {
            echo $count;
            echo $_SESSION['level'];
            // echo $reciever_level;
        }
        // } else {
        //     echo '0';
        // }
    } else {
        echo '0';
    }
}


function old_university()
{
    $stmt = "SELECT * FROM message, recipients 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'all students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at <= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    echo $_SESSION['login'];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $msg_title = $row['msg_title'];
            $msg_title1 = substr($msg_title, 0, 30);
            $string_id = preg_replace('/\s+/', '', $msg_title1);
            $msg_content = $row['msg_content'];
            $msg_content1 = substr($msg_content, 0, 50);
            $msg_file = $row['msg_file'];
            $msg_time = $row['created_at'];
            $time = date('M j H:i:s', strtotime($msg_time));

            if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  
                    <span class='float-end'>{$time} </span>
                </li>


                <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                    aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title lh-1' id='staticBackdropLabel'>{$msg_title}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                {$msg_content}<br> <a href='../../resources/files/{$row['msg_file']}'>{$row['msg_file']}</a>
                            </div>

                        </div>
                    </div>
                </div>
                ";
                // $display2 = "

                // <div class='p-3 col-lg-3  col-md-3' data-bs-toggle='modal' data-bs-target='#{$string_id}'>

                //     <div class='card bg-secondary'>
                //         <div class='card-body'>

                //             <h5 class='card-title'>{$msg_title}</h5>

                //             <!-- <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
                //                 card's content.</p> -->
                //             <a href='../../resources/files/{$row['msg_file']}' class='card-link'>{$row['msg_file']}</a>

                //         </div>
                //     </div>

                // </div> 

                // <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                //     aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                //     <div class='modal-dialog'>
                //         <div class='modal-content'>
                //             <div class='modal-header'>
                //                 <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                //                 <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                //             </div>
                //             <div class='modal-body'>
                //                 {$msg_content}<br> <a href='../../resources/files/{$row['msg_file']}'>{$row['msg_file']}</a>
                //             </div>

                //         </div>
                //     </div>
                // </div>
                // ";


                echo $display;
                // echo $display2;
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function new_university()
{
    $stmt = "SELECT * FROM message, recipients 
    WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'all students' 
    AND message.created_at >= '{$_SESSION['created_at']}'
    AND message.created_at >= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $msg_title = $row['msg_title'];
            $msg_title1 = substr($msg_title, 0, 30);
            $string_id = preg_replace('/\s+/', '', $msg_title1);

            $msg_content = $row['msg_content'];

            $msg_time = $row['created_at'];
            $time = date('M j H:i:s', strtotime($msg_time));
            if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span> 
                <span class='float-end'>{$time} </span>
            </li>


                <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                    aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                {$msg_content}
                            </div>

                        </div>
                    </div>
                </div>
                ";

                echo $display;
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}

function old_faculty()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'faculty students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at <= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $fac_name = show_faculty_name($_SESSION['faculty']);
            $unit_name = show_unit_name($row['sender']);
            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));

            echo $sender;
            echo $reciever_level;
            echo $fac_name;
            echo $sender_unit_type;
            echo $unit_name;

            if ($sender_unit_type === 'Faculty' && $fac_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
    
    
                    <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                        aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    {$msg_content}
                                </div>
    
                            </div>
                        </div>
                    </div>
                    ";

                    echo $display;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function new_faculty()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever AND recipients.rec_name = 'faculty students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at >= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $fac_name = show_faculty_name($_SESSION['faculty']);
            $unit_name = show_unit_name($row['sender']);

            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));
            if ($sender_unit_type === 'Faculty' && $fac_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
    
    
                    <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                        aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    {$msg_content}
                                </div>
    
                            </div>
                        </div>
                    </div>
                    ";

                    echo $display;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function old_department()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever AND recipients.rec_name = 'department students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at <= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $dept_name = show_dept_name($_SESSION['dept']);
            $unit_name = show_unit_name($row['sender']);

            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));

            echo $sender;
            echo $dept_name;
            echo $sender_unit_type;
            echo $unit_name;
            if ($sender_unit_type === 'Dept' && $dept_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
    
    
                    <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                        aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    {$msg_content}
                                </div>
    
                            </div>
                        </div>
                    </div>
                    ";

                    echo $display;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function new_department()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever AND recipients.rec_name = 'department students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at >= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $dept_name = show_dept_name($_SESSION['dept']);
            $unit_name = show_unit_name($row['sender']);

            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));
            if ($sender_unit_type === 'Dept' && $dept_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display = "<li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
    
    
                    <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                        aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    {$msg_content}
                                </div>
    
                            </div>
                        </div>
                    </div>
                    ";

                    echo $display;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function old_hall()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever 
    AND recipients.rec_name = 'hall students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at <= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $hall_name = show_hall_name($_SESSION['hall']);
            $unit_name = show_unit_name($row['sender']);

            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));

            echo $sender;
            echo $hall_name;
            echo $sender_unit_type;
            echo $unit_name;
            if ($sender_unit_type === 'Hall' && $hall_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display2 = "

                    <li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
                
                <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                    aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                {$msg_content}<br> <a href='../../resources/files/{$row['msg_file']}'>{$row['msg_file']}</a>
                            </div>

                        </div>
                    </div>
                </div>
                ";


                    // echo $display;
                    echo $display2;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}
function new_hall()
{
    $stmt = "SELECT * FROM message, recipients WHERE recipients.rec_id = message.reciever AND recipients.rec_name = 'hall students'
    AND message.created_at >= '{$_SESSION['created_at']}' AND message.created_at >= '{$_SESSION['login']}'";
    $result = query($stmt);
    confirm($result);
    // $message = array();
    // echo $result->num_row;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $reciever_level = $row['reciever_level'];
            $msg_id = $row['msg_id'];
            $sender = show_sender($row['sender']);
            $sender_unit_type = sender_unit_type($row['sender']);

            $dept_type = show_dept_type($_SESSION['dept']);
            $msg_title = $row['msg_title'];
            $string_id = preg_replace('/\s+/', '', $msg_title);
            $msg_content = $row['msg_content'];

            $hall_name = show_hall_name($_SESSION['hall']);
            $unit_name = show_unit_name($row['sender']);

            $msg_time = $row['created_at'];
            $time = date('H:i', strtotime($msg_time));
            if ($sender_unit_type === 'Hall' && $hall_name == $sender) {

                if ($reciever_level === '7' || $reciever_level === $_SESSION['level']) {

                    $display2 = "

                    <li class='list-group-item' data-bs-toggle='modal' data-bs-target='#{$string_id}'>
                    <span class='float-start'>{$sender}</span> <span class='px-5'>{$msg_title}</span>  <span class='px-5'>{$row['msg_file']}</span>
                    <span class='float-end'>{$time} </span>
                </li>
                
                <div class='modal fade' id='{$string_id}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
                    aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='staticBackdropLabel'>{$msg_title}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                {$msg_content}<br> <a href='../../resources/files/{$row['msg_file']}'>{$row['msg_file']}</a>
                            </div>

                        </div>
                    </div>
                </div>
                ";


                    // echo $display;
                    echo $display2;
                }
            }
        }
    } else {
        // echo "<li class='list-group-item' >
        //         Empty
        // </li>";
    }
    // echo $message;
}

/**********************************************************************UNIT Functions**************************************************/
function create_memo()
{
    if (isset($_POST['create_memo'])) {
        $id = $_SESSION['admin_id'];
        $title = escape_string($_POST['title']);
        $content = escape_string($_POST['mytextarea']);
        $file = escape_string($_FILES['file']['name']);
        $file_temp_location = $_FILES['file']['tmp_name'];

        $level = escape_string($_POST['level']);
        $recipient = escape_string($_POST['created_for']);

        move_uploaded_file($file_temp_location, FILE_DIRECTORY . DS . $file);

        $statement = "INSERT INTO message(msg_title, msg_content, msg_file, sender, reciever, reciever_level, created_at) 
                VALUES('{$title}', '{$content}', '{$file}', '{$id}', '{$recipient}', '{$level}', now())";

        $result = query($statement);
        confirm($result);

        echo "User created";
        redirect("../unit/index.php");
    }
}
function update_memo()
{
    if (isset($_POST['edit_memo'])) {
        $title = escape_string($_POST['title']);
        $content = escape_string($_POST['content']);
        $file = escape_string($_FILES['file']['name']);
        $file_temp_location = $_FILES['file']['tmp_name'];
        $level = escape_string($_POST['level']);
        $recipient = escape_string($_POST['created_for']);

        if (empty($file)) {
            $get_file = query("SELECT msg_file FROM message WHERE msg_id = " . escape_string($_GET['id']) . "");
            confirm($get_file);

            while ($file = $get_file->fetch_array()) {
                $file = $file['files'];
            }
        }


        move_uploaded_file($file_temp_location, FILE_DIRECTORY . DS . $file);

        $query = "UPDATE message SET msg_title = '{$title}', msg_content = '{$content}', msg_file = '{$file}', 
        reciever = '{$recipient}', reciever_level = '{$level}', updated_at = now() WHERE msg_id = " . escape_string($_GET['id']) . "";

        $last_id = last_id();

        $result = query($query);
        confirm($result);
        echo 'Memo with id ' . $last_id . ' has been updated';
        redirect("../unit/index.php");
    }
}
function view_memo()
{


    $statement = "SELECT * FROM message WHERE sender = '{$_SESSION['admin_id']}'";

    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['msg_id'];
            $title = $row['msg_title'];
            $content = $row['msg_content'];
            // 'body' => html_entity_decode($row['body']),
            $file = $row['msg_file'];
            $recipient = show_recipient($row['reciever']);
            $created_at = $row['created_at'];
            $sub_content = substr($content, 0, 40);

            $memo = "<tr>
                <td>{$title}</td>
                <td>{$sub_content}...</td>
                
                <td>{$recipient}</td>
                <td><a href='index.php?edit_memo&id={$row['msg_id']}'>Edit</a></td>

            </tr>";

            echo $memo;
        }
    } else {
        echo 'empty';
    }
}

function login_unit()
{
    if (isset($_POST['login_unit'])) {
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        if (!empty($email) && !empty($password)) {
            $check = "SELECT * FROM unit_admin WHERE admin_email = '{$email}' AND admin_password = '{$password}'";
            $result = query($check);
            confirm($result);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    $_SESSION['post'] = $row['admin_post'];
                    $_SESSION['admin_id'] = $row['admin_id'];
                }
                redirect('index.php');
            }
        } else {
            echo 'empty';
        }
    }
}

/***************************************************************ADMIN BACKEND***********************************************/


function students()
{
    $statement = "SELECT * FROM student ORDER BY id ASC";
    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['id'];
            $matric = $row['matric'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $department = show_dept_name($row['dept']);
            $faculty = show_faculty_name($row['faculty']);
            $hall = show_hall_name($row['hall']);
            // 'body' => html_entity_decode($row['body']),
            // $file = $row['files'];
            // $created_at = $row['created_at'];

            $student = "<tr>
    <td>{$id}</td>
    <td>{$firstname}{$lastname}</td>
    <td>{$matric}</td>
    <td>{$department}</td>
    <td>{$faculty}</td>
    <td>{$hall}</td>


</tr>";

            echo $student;
        }
    } else {
        echo 'empty';
    }
}
function admin_student_count()
{
    $stmt = "SELECT COUNT(id) as std FROM student ";
    $result = query($stmt);
    confirm($result);
    $row = $result->fetch_array();
    $std = $row['std'];
    echo $std;
}
function memo()
{
    $statement = "SELECT * FROM message";

    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['msg_id'];
            $title = $row['msg_title'];
            $content = $row['msg_content'];
            // 'body' => html_entity_decode($row['body']),
            $file = $row['msg_file'];
            $sender = show_sender($row['sender']);
            $reciever = show_recipient($row['reciever']);
            $created_at = $row['created_at'];

            $sub_content = substr($content, 0, 40);

            $admin_memo = "<tr>
    <td>{$id}</td>
    <td>{$title}</td>
    <td>{$sub_content}...</td>
    <td>{$file}</td>
    <td>{$sender}</td>
    <td>{$reciever}</td>

    <td><a href='index.php?memos&id={$id}'>View</a></td>


</tr>";

            echo $admin_memo;
        }
    } else {
        echo 'empty';
    }
}
function dashboard_memo()
{
    $statement = "SELECT * FROM message ORDER BY msg_id DESC LIMIT 5";

    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['msg_id'];
            $title = $row['msg_title'];
            $content = $row['msg_content'];
            // 'body' => html_entity_decode($row['body']),
            $file = $row['msg_file'];

            $created_at = $row['created_at'];

            $sub_content = substr($content, 0, 40);

            $admin_memo = "<tr>
    <td>{$id}</td>
    <td>{$title}</td>
    <td>{$sub_content}...</td>
    <td>{$file}</td>
    

    


</tr>";

            echo $admin_memo;
        }
    } else {
        echo 'empty';
    }
}
function admin_memo_count()
{
    $stmt = "SELECT COUNT(msg_id) as msg_id FROM message ";
    $result = query($stmt);
    confirm($result);
    $row = $result->fetch_array();
    $msg_id = $row['msg_id'];
    echo $msg_id;
}
function units()
{
    $statement = "SELECT * FROM unit";
    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['unit_id'];

            $unit_name = $row['unit_name'];
            $unit_type = unit_type_name($row['unit_type']);

            // 'body' => html_entity_decode($row['body']),
            // $file = $row['files'];
            // $created_at = $row['created_at'];

            $unit = "<tr>
    <td>{$id}</td>
    <td>{$unit_name}</td>
    <td>{$unit_type}</td>



</tr>";

            echo $unit;
        }
    } else {
        echo 'empty';
    }
}
function admin_unit_count()
{
    $stmt = "SELECT COUNT(unit_id) as unit_id FROM unit ";
    $result = query($stmt);
    confirm($result);
    $row = $result->fetch_array();
    $unit_id = $row['unit_id'];
    echo $unit_id;
}
function unit_admin()
{
    $statement = "SELECT * FROM unit_admin";
    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['admin_id'];

            $admin_post = $row['admin_post'];
            $admin_email = $row['admin_email'];
            $unit = show_unit_name($row['unit']);


            // 'body' => html_entity_decode($row['body']),
            // $file = $row['files'];
            // $created_at = $row['created_at'];

            $unit_admin = "<tr>
    <td>{$id}</td>
    <td>{$admin_post}</td>
    <td>{$admin_email}</td>
    <td>{$unit}</td>



</tr>";

            echo $unit_admin;
        }
    } else {
        echo 'empty';
    }
}
function dashboard_unit_admin()
{
    $statement = "SELECT * FROM unit_admin ORDER BY admin_id DESC LIMIT 5";
    $result = query($statement);
    confirm($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_array()) {


            $id = $row['admin_id'];

            $admin_post = $row['admin_post'];
            $admin_email = $row['admin_email'];
            $unit = show_unit_name($row['unit']);


            // 'body' => html_entity_decode($row['body']),
            // $file = $row['files'];
            // $created_at = $row['created_at'];

            $unit_admin = "<tr>
    <td>{$id}</td>
    <td>{$admin_post}</td>
    <td>{$admin_email}</td>
    <td>{$unit}</td>



</tr>";

            echo $unit_admin;
        }
    } else {
        echo 'empty';
    }
}
function admin_unit_admin_count()
{
    $stmt = "SELECT COUNT(admin_id) as admin_id FROM unit_admin ";
    $result = query($stmt);
    confirm($result);
    $row = $result->fetch_array();
    $admin_id = $row['admin_id'];
    echo $admin_id;
}
function create_unit()
{
    if (isset($_POST['create_unit'])) {
        $name = escape_string($_POST['unit_name']);
        $type = escape_string($_POST['unit_type']);

        $stmt = "INSERT INTO unit(unit_name, unit_type) VALUES('{$name}', '{$type}')";
        $result = query($stmt);
        confirm($result);

        set_message('Unit Created');
        redirect('index.php?unit');
    }
}
function create_unit_admin()
{
    if (isset($_POST['create_unit'])) {
        $admin_post = escape_string($_POST['post']);
        $admin_email = escape_string($_POST['email']);
        $admin_password = escape_string($_POST['password']);
        $admin_unit = escape_string($_POST['unit']);

        $stmt = "INSERT INTO unit_admin(admin_post, admin_email, admin_password, unit) VALUES('{$admin_post}','{$admin_email}','{$admin_password}', '{$admin_unit}')";
        $result = query($stmt);
        confirm($result);

        set_message('Unit Admin Created');
        redirect('index.php?unit_admin');
    }
}

function login_admin()
{
    if (isset($_POST['login_admin'])) {
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        if (!empty($email) && !empty($password)) {
            if ($email = 'admin@gmail.com' && $password = 'tilghagust') {

                $_SESSION['admin'] = 'superadmin';


                redirect('index.php');
            }
        } else {
            echo 'empty';
        }
    }
}