<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/PersonRepository.php';


class AccountController
{
    use Response;

    public function change()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $name = $_POST['surname'];
            $first_name = $_POST['firstname'];
            $email = ($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            var_dump($_POST);

            $PersonRepository = new PersonRepository();

            $result = $PersonRepository->update($name, $first_name, $email, $password);

            return $result;
        }
    }


    public function index()
    {
        $result = $this->change();


        $viewData = [
            'result' => $result
        ];

        $this->render('AccountPageTemplate', $viewData);
    }
}
