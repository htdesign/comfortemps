<?php

session_start();

require_once 'PHPMailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['phone'])) {

    $fields = [
        'name' => $_POST['name'],
        'email' => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
        'phone' => $_POST['phone']
    ];

    foreach($fields as $field => $data) {
        if(empty($data)) {
            $errors[] = 'The ' . $field . ' field is required';
        }
    }

    if(empty($errors)) {

        $m = new PHPMailer;

        $m->isSMTP();
        $m->SMTPAuth = true;
        // $m->SMTPDebug = 1;
        $m->Host = 'smtp.gmail.com';
        $m->Username = 'comfortemps@gmail.com';
        $m->Password = 'Ctemps4427';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m->isHTML();

        $m->Subject = 'Comfortemps Contact';
        $m->Body = '<p>From: ' . $fields['name'] . '</p>
                    <p>Email: ' . $fields['email'] . '</p>
                    <p>Phone: ' . $fields['phone'] . '</p>';

        $m->FromName = 'Contact';

        $m->AddAddress('Comfortemps@gmail.com', 'Comfortemps');

        if($m->send()) {
            header('Location: index.php');
            $_SESSION['sent'] = 'Your details has been sent.';
            die();
        } else {
            // $errors[] = 'Sorry, could not send email. Try again later.';
            $errors[] = $m->ErrorInfo;
        }

    }

} else {
    $errors[] = 'Something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: index.php#form');

// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     $name = trim($_POST['name']);
//     $email = trim($_POST['email']);
//     $phone = trim($_POST['phone']);

//     if(!empty($name) && !empty(address) && !empty($phone)){
//         echo "<p>Name: $name</p>";
//         if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             echo "<p>email: $email</p>";
//         }
//         echo "<p>Phone: $phone</p>";
//     }
// }