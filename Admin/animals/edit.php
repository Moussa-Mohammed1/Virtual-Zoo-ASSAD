<?php
include "./../../config.php";
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) {
	header('Location: ./../../auth/login.php');
	exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = intval($_POST['id_animal'] ?? 0);
	$image = trim($_POST['image'] ?? '');
	$nom = trim($_POST['nom'] ?? '');
	$espece = trim($_POST['espece'] ?? '');
	$alimentation = trim($_POST['alimentation'] ?? '');
	$paysorigine = trim($_POST['paysorigine'] ?? '');
	$id_habitat = intval($_POST['id_habitat'] ?? 0);
	$description = trim($_POST['description'] ?? '');
	$age = isset($_POST['age']) && $_POST['age'] !== '' ? intval($_POST['age']) : 0;

	$stmt = $conn->prepare("UPDATE animal SET image = ?, nom = ?, espece = ?, alimentation = ?, paysorigine = ?, id_habitat = ?, description = ?, age = ? WHERE id_animal = ?");
	if ($stmt) {
		$stmt->bind_param('sssssisii', $image, $nom, $espece, $alimentation, $paysorigine, $id_habitat, $description, $age, $id);
		$stmt->execute();
		$stmt->close();
	}

}

header('Location: ./animals.php');
exit();

?>

