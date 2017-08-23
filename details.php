<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    if(!empty($name) && !empty(address) && !empty($phone)){
        echo "<p>Name: $name</p>";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>email: $email</p>";
        }
        echo "<p>Phone: $phone</p>";
    }
}