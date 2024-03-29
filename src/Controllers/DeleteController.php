<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/PersonRepository.php';

class DeleteController
{
    use Response;

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $email_delete = ($_POST['email_delete']);

            $PersonRepository = new PersonRepository();

            $result = $PersonRepository->delete($email_delete);
            header("Location: HomePageTemplate.php");

            return $result;
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
