<?php
declare(strict_types=1);

// Login verification
if(!empty($_POST) && !empty(htmlspecialchars( $_POST['email'])) && !empty(htmlspecialchars($_POST['password']))) {

    $req = $pdo->prepare('SELECT * FROM users WHERE (email = :email)');
    $req->execute(['email' => $_POST['email']]);
    $user = $req->fetch(PDO::FETCH_LAZY);
    
    if($user && password_verify($_POST['password'], $user->password )) {
      	$_SESSION['auth'] = $user->email;
        $_SESSION['id'] = $user->id;
        $_SESSION['firstName'] = $user->firstName;
        header('Location: index.php?page=dashboard');
    }
    elseif($user == null) {
        $errors = "*Utilisateur n'existe pas*";
    }
    else{
        $errors = "*Mot de passe ou email incorrect*";
    }
}
require './views/login.phtml';