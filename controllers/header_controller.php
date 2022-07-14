<?php
if(isset($_SESSION['auth'])) {
    require_once './models/user_manager.php';
}
require './views/header.phtml';
