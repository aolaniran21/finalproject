<?php
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
// header("Content-Type: application/json; charset=UTF-8");
include('../../resources/config.php');
// if(isset($_GET['username'])){
//     extract ($_GET);
    
//     // 
//     if(isset($_GET['password'])){

        $username = escape_string($_GET['username']);
        $password = escape_string($_GET['password']);

        $statement = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
        // $statement = "SELECT * FROM user ";
        $result = query($statement);
        confirm($result);
        
        
        if ($result-> num_rows >0){
            $users=array();
            while( $row = $result->fetch_array()){
                
                $user = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    // 'body' => html_entity_decode($row['body']),
                    'password' => $row['password']
                ];
                array_push($users, $user);
                

            }
            // header("Content-type: application/json");
            echo json_encode($users);
        }
        // echo json_encode($users);

        else{
            echo json_encode(['message'=>'No user found']);
        }
    

    
    // }
    // if ($username1 == )

    // if (mysqli_num_rows($query) == 0) {
    //     echo('Wrong Username or Password');
        
    // } else {

        
    //     $users=array();
        // while($row = fetch_array($query)) {
        //     $user=array(
        //         "id" =>  $row["id"],
        //         "username" => $row["username"],
        //         "password" => $row["email"],
                
        //     );
        //     array_push($users,$user);
        // }
        // echo json_encode($users);
    //}

// }
// else{
//     echo 'null';
// }

?>