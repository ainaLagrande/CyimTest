<?php
declare(strict_types=1);
if(isset($_SESSION['auth'])) {
    require './models/user_manager.php';
}
require './views/header.phtml';
