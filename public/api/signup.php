<?php
include('../../resources/config.php');



$data = json_decode(file_get_contents("php://input"));
if(isset($data->username)&&isset($data->password)){
    if(empty($data->username) && empty($data->password)){

        echo json_encode(['message'=>'empty']);
    }else{

        $firstname = $data->firstname;
        $laststname = $data->lastname;
        $matric = $data->matric;
        $level = $data->level;
        $dept = $data->dept;
        $level = $data->level;
    //validation whether user data is having name or not. similarly email, password etc.
    // if(!$user->username){
    //     echo 'Name Required !';   
    // }else if(!$user->password){
    //     echo 'Password Required !';         
    // }else{
        //method doEncrypt() of encipher.php which convert plain text to encrypted text.
        $password = $data->password;
        // $conn=getConnection();
        // if($conn==null){
        //     echo 'Server Connection Error !';
        // }else{
            $statemant= "INSERT INTO user(username, password) VALUES ('{$username}','{$password}')";

            $result = query($statement); //$result = true/false on success or error respectively.
            confirm($result);
            if ($result) {
                echo json_encode(['message'=>'Successful']);
            } else {
                echo json_encode(['message'=>'Not Successful']);
            }
            //close connection
            // $db_conn->close();
        // }
    }
}else{
    echo json_encode(['message'=>'empty2']);
}