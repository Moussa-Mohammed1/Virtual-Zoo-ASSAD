<?php
include "./../config.php";

session_start();
$name = trim($_POST['nom']) ?? '';
$password = $_POST['password'] ?? '';
$loggeduser = null;
$statement = $conn->prepare("SELECT * FROM utilisateur WHERE nom = ?");
$statement->bind_param('s', $name);
$statement->execute();
$result = $statement->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['motpasse_hash'])) {
            $loggeduser = $row;
            break;
        }
    }
    if ($result->num_rows === 1 && !isset($loggeduser)) {
        $_SESSION['incorrectpassword'] = "Incorrect password";
        header("Location: ./../auth/login.php");
        exit();
    }
} else {
    $_SESSION['nouser'] = "Incorrect Username or password";
    header("Location: ./../auth/login.php");
    exit();
}
if ($loggeduser) {
    $_SESSION['loggeduser'] = $loggeduser;

    if (!$loggeduser['approved']) {
        header('Location: ./../auth/approval.php');
        exit();
    }

    switch ($loggeduser['role']) {
        case 'admin':
            header('Location: ./../Admin/dashboard.php');
            break;
        case 'visiteur':
            header('Location: ./../Visitor/visitor.php');
            break;
        case 'guide':
            header('Location: ./../Guide/guide.php');
            break;
    }
    exit();
}
