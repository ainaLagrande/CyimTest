<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();   
}
require './core/router.php';
require './core/connection.php';
require './controllers/layout_controller.php';

