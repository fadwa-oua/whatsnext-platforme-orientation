<?php
include '../Config_db/db.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier les informations d'identification de l'utilisateur
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && ($password==$user['password'])) {
        // Authentification réussie, démarrer la session
        if($user['role'] == 'admin') {
            header("Location: ../template/admin.php");
            exit();
        }
        header("Location: ../template/Aceuil.html");
        exit();
    } 
    else {
        echo "<script>alert('Email ou mot de passe incorrect.'); window.location.href='../template/login.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Veuillez remplir tous les champs.'); window.location.href='../template/login.php';</script>";
    exit();
}






?>