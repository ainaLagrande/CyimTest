<?php

$pages = [
    'homepage' => './controllers/homepage_controller.php',
    'login_registration' => './controllers/login_registration_controller.php',
    'login' => './controllers/login_controller.php',
    'registration' => './controllers/registration_controller.php',
    'dashboard' => './controllers/dashboard_controller.php',
    'logout' => './controllers/logout_controller.php',
];

$page = $pages['homepage'];

if (isset($_GET['page']) && in_array($_GET['page'], array_keys($pages))) {
    $page = $pages[$_GET['page']];
}
