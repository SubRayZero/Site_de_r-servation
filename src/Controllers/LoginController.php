<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/LogInRepository.php';

class LoginController
{
    use Response;

    public function logIn()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $email = ($_POST['email']);
            $password = ($_POST['password']);

            $LogInRepository = new LogInRepository();
            $LogIn = $LogInRepository->login($email);

            if ($LogIn && password_verify($password, $LogIn['password'])) {
                //session_start();
                header("Location: http://projet6/Site_de_reservation/public/");
                exit;
            }
        }
    }

    public function index()
    {
        $LogIn = $this->logIn();

        $viewData = [
            'logIn' => $LogIn
        ];

        $this->render('ToLogInPageTemplate', $viewData);

    }
}
