<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sources/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../styles/login.css">
    <title>WeLearn | Connexion</title>
</head>

<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="function/traitement_login.php" method="get">
            <div class="username-container">
                <label for="username"><i class="fas fa-user"></i> Nom d'utilisateur</label>
                <input type="text" placeholder="Utilisateur123" id="username" name="username_etudiant" required>
            </div>
            <div class="password-container">
                <label for="password"><i class="fas fa-key"></i> Mot de passe</label>
                <input type="password" placeholder="Votre mot de passe" id="password" name="password_etudiant" required>
            </div>
            <button type="submit">Se connecter</button>
            <a href="../index.php">Annuler</a>
        </form>
        <p>
            Vous n'avez pas encore de compte?<br>
            <a href="signin.php">Créez un compte</a>
        </p>
    </div>
    <h2 class="welcome">
        Welcome<br>Back!
    </h2>
</body>

</html>