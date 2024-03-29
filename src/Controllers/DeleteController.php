<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/PersonRepository.php';

class DeleteController
{
    use Response;

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            session_start();

            //$emailPost = $_POST['email'];
            $person_id = $_SESSION['user_id'];
            $PersonRepositoryDelete = new PersonRepository();

            $delete = $PersonRepositoryDelete->delete($person_id);
            header("Location: RegisterPageTemplate.php");
            exit;


            return $delete;
        }
    }

    public function index()
    {
        $result = $this->delete();
        $viewData = [
            'result' => $result
        ];

        $this->render('AccountPageTemplate', $viewData);
    }
}

