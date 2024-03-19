
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Enregistrement ADMIN !</title>
</head>
<body>
    <div class="Connexion">
    <form action="traitement.php" method="post" class="form">
    <h1>Enregistrer un nouveau Admin ! </h1>
    <div class="input-box">
        <input type="text" placeholder="Nom" name="nom" required>
        <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
        <input type="text" placeholder="Prenom" name="prenom" required>
        <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
        <input type="text" placeholder="Login" name="login" required>
        <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
        <input type="password" placeholder="password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
    </div>

    <button type="submit" class="btn">Enregistrer</button>
</form>

       </div> 
</body>
</html>