<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sources/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../styles/signin.css">
    <title>WeLearn | Inscription</title>
</head>

<body>
    <div class="signin-container">
        <h2>Inscription</h2>
        <form action="function/subscription.php" method="post">
            <div class="fullname-container">
                <label for="first_name"><i class="fas fa-user"></i> Nom</label>
                <input type="text" name="nom_etudiant" placeholder="exemple: John Doe" id="first_name" required>
            </div>
            <div class="fullname-container">
                <label for="last_name"><i class="fas fa-user"></i> Prénom</label>
                <input type="text" name="prenom_etudiant" placeholder="exemple: John Doe" id="last_name" required>
            </div>
            <div class="email-container">
                <label for="email"><i class="fab fa-google"></i> Email</label>
                <input type="email" name="email_etudiant" placeholder="exemple: 123@gmail.com" id="email" required>
            </div>
            <div class="username-container">
                <label for="username"><i class="fas fa-user"></i> Nom d'utilisateur</label>
                <input type="text" name="username_etudiant" placeholder="exemple: Utilisateur123" id="username" required>
            </div>
            <div class="password-container">
                <label for="password"><i class="fas fa-key"></i> Mot de passe</label>
                <input type="password" name="password_etudiant" placeholder="Votre mot de passe" id="password" required>
            </div>
            <div class="confirm-password-container">
                <label for="confirm_password"><i class="fas fa-lock"></i> Confirmer mot de passe</label>
                <input type="password" name="confirm_password_etudiant" placeholder="Ressaisissez votre mot de passe" id="confirm_password" required>
            </div>
            <input type="submit" value="S'inscrire">
            <a href="../index.php">Annuler</a>
        </form>
        <p>
            Vous avez déjà un compte?<br>
            <a href="login.php">Se connecter</a>
        </p>
    </div>
    <h2 class="welcome">
        Join<br>WeLearn!
    </h2>
</body>

</html>