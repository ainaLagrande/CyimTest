<?php
declare(strict_types=1);
if(!isset($_SESSION['auth'])) {
	exit("Connectez vous");
}
require './views/dashboard.phtml';