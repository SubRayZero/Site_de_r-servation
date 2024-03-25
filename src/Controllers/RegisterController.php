<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/PersonRepository.php';

class RegisterController
{
    use Response;

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $name = $_POST['surname'];
            $first_name = $_POST['firstname'];
            $email = ($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $PersonRepository = new PersonRepository();

            $result = $PersonRepository->create($name, $first_name, $email, $password);

            return $result;
        }
    }


    public function index()
    {
        $result = $this->register();


        $viewData = [
            'register' => $result
        ];

        $this->render('RegisterPageTemplate', $viewData);
    }



    /*public function index()
    {
        $PersonRepository = new PersonRepository();
        $person = $PersonRepository->getAll();

        $viewData = [
            'person' => $person
        ];

        $this->render('RegisterPageTemplate', $viewData);
    }*/
}
