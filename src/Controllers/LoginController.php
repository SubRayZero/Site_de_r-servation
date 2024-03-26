<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/LogInRepository.php';
require_once __DIR__ . '/../Repositories/PersonRepository.php';


class LoginController
{
    use Response;

    public function logIn()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $email = ($_POST['mail']);
            $password = ($_POST['password_log']);

            $LogInRepository = new LogInRepository();
            $LogIn = $LogInRepository->login($email);

            if ($LogIn && password_verify($password, $LogIn['password'])) {
                session_start();
                //$_SESSION["id_person"]= $LogIn['id'];
                header("Location: AccountPageTemplate.php");
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
