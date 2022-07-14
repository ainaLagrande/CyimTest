<?php
declare(strict_types=1);
unset($_SESSION['auth']);
header('Location: index.php?page=homepage');
