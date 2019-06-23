<?php
    if (isset($_POST['email'])) {

        $admin_email = "mkorolija3@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);

        header('Location: https://markok96.github.io/devcrew/success.html');
    }