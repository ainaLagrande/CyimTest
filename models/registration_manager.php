<?php

function checkUser()
{
    require'./core/connection.php';
    $q = $pdo->prepare('SELECT email FROM users WHERE email = :email');
    $q->execute(['email' => $_POST['email']]);
    $user = $q->fetch(PDO::FETCH_ASSOC);
    $checkUser = $q->rowCount();
    
    if($checkUser === 1)
    {
        return false;
    }
}

function emailValidate(){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        return false;
    }
}
function isUserFormSubmitted():bool 
{
	return isset($_POST['lastName']) && isset($_POST['firstName']) 
	&& isset($_POST['email']) && isset($_POST['password']);
}

 function isUserFormValid():bool 
{
    return !empty($_POST['lastName']) && !empty($_POST['firstName']) 
    && !empty($_POST['email']) && !empty($_POST['password']);
}

function registerUserValidate()
{
    require './core/connection.php';
    $sql = 'INSERT INTO users (lastName,firstName,email ,password) 
    VALUES(:lastName,:firstName, :email, :password)';
    $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
    $q = $pdo->prepare($sql);
    $q->execute([
    'lastName' => htmlspecialchars($_POST['lastName']),
    'firstName' => htmlspecialchars($_POST['firstName']),
    'email' => htmlspecialchars($_POST['email']),
    'password' => htmlspecialchars($password)
    ]);
}

