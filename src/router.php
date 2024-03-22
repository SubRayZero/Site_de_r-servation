<?php

require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/LoginController.php.php";
require __DIR__ . "/Controllers/RegisterController.php";
require __DIR__ . "/Controllers/ReservationController.php";

$uri = $_SERVER['REQUEST_URI'];

$homeController = new HomeController();
$loginController = new LoginController();
$registerController = new RegisterController();
$reservationController = new ReservationController();



switch ($uri) {
    case URL_HOMEPAGE:
        $homeController->index();
        break;

    case URL_LOGIN:
        $loginController->index();
        break;

    case URL_REGISTER:
        $registerController->index();
        break;

    case URL_RESERVATION:
        $reservationController->index();
        break;
}
