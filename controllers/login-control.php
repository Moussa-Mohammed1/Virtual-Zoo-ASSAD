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
    echo $name ."  " . $password ;
    if($result->num_rows > 0) {
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
    }
    else{
        $_SESSION['nouser'] = "Incorrect Username or password";
    }
    if ($loggeduser) {
        $_SESSION['loggeduser'] = $loggeduser;
        if (!$loggeduser['approved']) {
            header('Location: ./../auth/approval.php');
            exit();
        }
        if ($loggeduser['role'] == 'visiteur') {
            header('Location: ./../Visitor/visitor.php');
            exit();
        }
        if ($loggeduser['role'] == 'guide') {
            header('Location: ./../Guide/guide.php');
            exit();
        }
    }