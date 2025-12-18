<?php
    session_start();
    include "./../config.php";

    $errors = [];
    $oldvalues = [];
    $name = trim($_POST['nom']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $oldvalues['name'] = $name;

    if (!preg_match('/^[A-Za-z]+(?:\s[A-Za-z]+)*$/', $name)) {
        $errors['name'] = "Name must be letters and spaces";
    }
    $password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/';
    if (!preg_match($password_pattern, $password)) {
        $errors['password'] = "Password must be minimum of 8 caracters, at least 1 lowercase, 1 uppercase and 1 digit";
    }
    $email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (!preg_match($email_pattern, $email)) {
        $errors['email'] = "Email must be valid";
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['oldvalues'] = $oldvalues;
        header('Location: ./../auth/register.php');
        exit();
    }
    $p_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateur (nom,email,motpasse_hash)
            VALUES ('$name','$email','$p_hashed')";
    $stmt = $conn->prepare("INSERT INTO utilisateur (nom,email,motpasse_hash) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $name, $email, $p_hashed);
    $stmt->execute();
    $_SESSION['currentuser'] = $name;
    header('Location: ./../auth/roles.php');
    exit();
    
