<?php
    include "./../../config.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_animal'])) {
        
        $nom          = $_POST['nom'];
        $espece       = $_POST['espece'];
        $alimentation = $_POST['alimentation'];
        $image        = $_POST['image'];
        $paysorigine  = $_POST['paysorigine'];
        $description  = $_POST['description'];
        $id_habitat   = intval($_POST['id_habitat']);

        $stmt = $conn->prepare("INSERT INTO animal (nom, espece, alimentation, `image`, paysorigine, `description`, id_habitat) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("ssssssi", $nom, $espece, $alimentation, $image, $paysorigine, $description, $id_habitat);

        if ($stmt->execute()) {
            header('Location: ./animals.php');
            exit();
        }
    }