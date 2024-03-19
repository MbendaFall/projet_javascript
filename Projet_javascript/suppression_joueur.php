
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Joueurs</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Liste des Joueurs</h2>
    <table>
        <thead>
            <tr>
                <th>Nom du Joueur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
                <tr>
                    <td><?= $player['nom_joueur'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
