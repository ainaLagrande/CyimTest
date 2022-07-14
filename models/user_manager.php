<?php
function fetchUserInfos() {
	require'./core/connection.php';
	$req = $pdo->prepare('SELECT * FROM users ');
	$req->execute(array($_SESSION['auth']));
	return $req->fetch();
}

$user =  fetchUserInfos();