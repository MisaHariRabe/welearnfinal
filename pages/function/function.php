<?php
	require("dbconnexion.php");
	
	$conn = dbconnect();

    function show_formation_category() {
		global $conn;
		
        $sql = "SELECT * FROM categorie";
        $query = mysqli_query($conn, $sql);

        $result = array();
        
        while ($donnee = mysqli_fetch_assoc($query)) {
            $result = $donnee;
        }

        mysqli_free_result($query);
        return $result;
    }

    function show_category_modules($id_s_categ, $id_categ) {
		global $conn;
        $sql = "SELECT * FROM module WHERE id_sous_categorie = $id_s_categ AND id_categorie = $id_categ";
        $query = mysqli_query($conn, $sql);
		
		

        $result = array();
        
        while ($donnee = mysqli_fetch_assoc($query)) {
            $result[] = $donnee;
        }

        mysqli_free_result($query);
		return $result;
    }

    function show_module_info($id_module) {
		global $conn;
        $sql = "SELECT * FROM module JOIN contenu ON module.id_module = contenu.id_contenu WHERE id_module = %s";
		$sql = sprintf($sql, $id_module);
		
        $query = mysqli_query($conn, $sql);

        $donnee = mysqli_fetch_assoc($query);

        mysqli_free_result($query);
        return $donnee;
    }

    function show_trainer($id_formateur) {
		global $conn;
        $sql = "SELECT * FROM formateur WHERE id_formateur = %s";
		$sql = sprintf($sql, $id_formateur);
		
        $query = mysqli_query($conn, $sql);
		
		// var_dump($sql);

        $donnee = mysqli_fetch_assoc($query);

        mysqli_free_result($query);
        return $donnee;
    }

    function add_etudiant($id_etudiant, $nom_etudiant, $prenom_etudiant, $email_etudiant, $username_etudiant, $password_etudiant) {
		global $conn;
        $sql = "INSERT INTO `etudiant` (`id_etudiant`, `nom_etudiant`, `prenom_etudiant`, `email_etudiant`, `username_etudiant`, `password_etudiant`) VALUES ('%d', '%s', '%s', '%s', '%s', '%s');";
        $sql = sprintf($sql, $id_etudiant, $nom_etudiant, $prenom_etudiant, $email_etudiant, $username_etudiant, $password_etudiant);
        
        mysqli_query($conn, $sql);
    }

    function show_all_etudiant_info() {
		global $conn;
        $sql = "SELECT * FROM etudiant";
        $query = mysqli_query($conn, $sql);

        $result = array();

        while($donnee = mysqli_fetch_assoc($query)) {
            $result[] = $donnee;
        }

        mysqli_free_result($query);
        return $result;
    }

    function show_etudiant_info($username_etudiant) {
		global $conn;
        $sql = "SELECT * FROM etudiant WHERE username_etudiant = '$username_etudiant'";
        $query = mysqli_query($conn, $sql);

        $result = mysqli_fetch_assoc($query);

        mysqli_free_result($query);
        return $result;
    }
?>