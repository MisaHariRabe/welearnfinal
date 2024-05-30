<?php
    require("function.php");

    $username_etudiant = $_GET['username_etudiant'];
    $password_etudiant = $_GET['password_etudiant'];
    $etudiant_unique = show_etudiant_info($username_etudiant); // Affiche l'étudiant avec le même nom d'utilisateur

    if(isset($username_etudiant) && isset($password_etudiant)) {
        if($username_etudiant == $etudiant_unique['username_etudiant']) {
            if($password_etudiant == $etudiant_unique['password_etudiant']) {
                header('location:../index.php?user='.$etudiant_unique['username_etudiant']);
            } else {
                die("Le mot de passe ne correspond pas à l'utilisateur");
            }
        } else {
            die("L'étudiant n'existe pas!");
        }
    } else {
        die('Veuillez remplir tous les champs');
    }
?>