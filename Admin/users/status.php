<?php
    include "./../../config.php";
    session_start();

    $id = $_GET['id'] ?? '';
    $status = $_GET['status'] ?? '';

    if (isset($id) && isset($status)) {
        if ($status == 1) {
            $stmt = $conn->prepare("UPDATE utilisateur SET isactive = 0 WHERE id_user = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            header('Location: ./users.php');
            exit();
        }
        elseif ($status == 0) {
            $stmt = $conn->prepare("UPDATE utilisateur SET isactive = 1 WHERE id_user = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            header('Location: ./users.php');
            exit();
        }
    }