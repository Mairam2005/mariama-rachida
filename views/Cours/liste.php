<?php
require_once("../../models/CoursService.php");
$coursService = new CoursService();
$coursList = $coursService->getCours();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        h1 {
            text-align: center;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-btn {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin: 5px;
        }
        .action-btn.delete {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <h1>Liste des Cours</h1>
    <a href="form.php" class="action-btn">Ajouter un Cours</a>
    <a href="form.php" style="display: block; text-align: center; margin-bottom: 15px; color: #007bff;">Aller au formulaire d'ajout</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>ID Enseignant</th>
            <th>Matricule Étudiant</th>
            <th>ID Salle</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($coursList as $cours): ?>
            <tr>
                <td><?= $cours['idc'] ?></td>
                <td><?= $cours['libelle'] ?></td>
                <td><?= $cours['iden'] ?></td>
                <td><?= $cours['matricule'] ?></td>
                <td><?= $cours['ids'] ?></td>
                <td>
                    <a href="edit.php?idc=<?= $cours['idc'] ?>" class="action-btn">Modifier</a>
                    <form action="../../controllers/CoursCtrl.php" method="post" style="display:inline;">
                        <input type="hidden" name="action" value="supprimer">
                        <input type="hidden" name="idc" value="<?= $cours['idc'] ?>">
                        <button type="submit" class="action-btn delete">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
