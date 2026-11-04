<?php
include '../Config_db/db.php';
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Un compte avec cet email existe déjà.'); window.location.href='../template/creercompte.php';</script>";
        exit();
    }
    if($_POST['statut'] == 'user') {
        $role = 'Student';
        $level=$_POST['niveau'];
        $filiere=$_POST['filiere'];
        $qyery = "INSERT INTO student (nom, prenom, email,level,filiere) VALUES (:nom, :prenom, :email,:level,:filiere)";
        $query2="INSERT INTO users (name,email, password, role) VALUES (:nom,:email, :password,:role)";
        $stmt = $conn->prepare($qyery);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':filiere', $filiere);
        $stmt->execute();
        $stmt = $conn->prepare($query2);
        $stmt->bindParam(':name', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password); 
        $stmt->bindParam(':role', $role);
        $stmt->execute();
    
    } else if($_POST['statut'] == 'speacialist') {
        $role = 'Cosnsultant';
    } 

    // Insérer le nouvel utilisateur dans la base de données
    $query = "INSERT INTO users (nom, prenom, email, password, role) VALUES (:nom, :prenom, :email, :password, 'user')";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password); // Note: En production, utilisez un hash sécurisé pour les mots de passe
    if ($stmt->execute()) {
        echo "<script>alert('Compte créé avec succès. Vous pouvez maintenant vous connecter.'); window.location.href='../template/login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Erreur lors de la création du compte.'); window.location.href='../template/creercompte.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Veuillez remplir tous les champs.'); window.location.href='../template/creercompte.php';</script>";
    exit();
}



?>