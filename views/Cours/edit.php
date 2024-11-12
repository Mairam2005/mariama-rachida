<?php
require_once("../../models/CoursService.php");
$coursService = new CoursService();
$cours = $coursService->getCoursById($_GET['idc']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="../../controllers/CoursCtrl.php" method="post">
        <h1>Modifier un Cours</h1>
        <input type="hidden" name="action" value="modifier">
        <input type="hidden" name="idc" value="<?= $cours['idc'] ?>">
        
        <label>Libellé :</label>
        <input type="text" name="libelle" value="<?= $cours['libelle'] ?>" required>
        
        <label>ID Enseignant :</label>
        <input type="number" name="iden" value="<?= $cours['iden'] ?>" required>
        
        <label>Matricule Étudiant :</label>
        <input type="number" name="matricule" value="<?= $cours['matricule'] ?>" required>
        
        <label>ID Salle :</label>
        <input type="number" name="ids" value="<?= $cours['ids'] ?>" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
