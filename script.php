<?php

// session_start();

if(isset($_POST['submit'])){
    
    $new_message = array(
        "name" => $_POST['name'],
        "date" => $_POST['date'],
        "email" => $_POST['email'],
        "nick" => $_POST['nick'],
        "dcName" => $_POST['dcName']
    );

    if(filesize("participants.json") == 0){
        $first_record = array($new_message);
        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("participants.json"));
        array_push($old_records, $new_message);
        $data_to_save = $old_records;
    }

    $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

    if(!file_put_contents("participants.json", $encoded_data, LOCK_EX)){
        $error = "<script>alert('Can't registered, please try again')</script>";
    } else {
        $success =  "<script>alert('Registered successfully')</script>";
    }

    header("Location: index.php");
}