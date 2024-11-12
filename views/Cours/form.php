<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Cours</title>
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
        <a href="liste.php" style="display: block; text-align: center; margin-bottom: 15px; color: #007bff;">Aller à la liste des cours</a>
        <h1>Ajouter un Cours</h1>
        <input type="hidden" name="action" value="ajout">
        <label>Libellé :</label>
        <input type="text" name="libelle" required>
        
        <label>ID Enseignant :</label>
        <input type="number" name="iden" required>
        
        <label>Matricule Étudiant :</label>
        <input type="number" name="matricule" required>
        
        <label>ID Salle :</label>
        <input type="number" name="ids" required>
        
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
