<?php
    require("function.php");

    $nom_etudiant = $_POST['nom_etudiant'];
    $prenom_etudiant = $_POST['prenom_etudiant'];
    $email_etudiant = $_POST['email_etudiant'];
    $username_etudiant = $_POST['username_etudiant'];
    $password_etudiant = $_POST['password_etudiant'];
    $confirm_password_etudiant = $_POST['confirm_password_etudiant'];
    $etudiant_unique = show_etudiant_info($username_etudiant); // Affiche l'étudiant avec le même nom d'utilisateur
    $etudiant_db = show_all_etudiant_info(); // Affiche tous les étudiants
    $id_etudiant = sizeof($etudiant_db); // Incrémente l'id de l'étudiant par la taille de la table étudiant

    if (($password_etudiant == $confirm_password_etudiant)) {
        if(sizeof($etudiant_unique) < 1) {    
            add_etudiant($id_etudiant, $nom_etudiant, $prenom_etudiant, $email_etudiant, $username_etudiant, $password_etudiant);
            header("location:../login.php");
        } else {
            die("Le nom d'utilisateur existe déjà");
        }
    } else {
        echo('Les mots de passe ne correspondent pas!');
    }

?>