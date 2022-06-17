<?php
session_start();

spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';

// $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

// dump($_SERVER);
// dump($_SERVER['REMOTE_ADDR']);
// dump($_SERVER,'var_dump');
