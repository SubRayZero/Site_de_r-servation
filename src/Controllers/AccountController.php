

<?php

require_once __DIR__ . '/../Services/Response.php';

class AccountController
{
    use Response;

    public function index()
    {
        $title = "Accueil";

        $viewData = [
            'title' => $title
        ];

        $this->render('AccountPageTemplate', $viewData);
    }

    public function pageNotFound()
    {
        $this->render('404');
    }
}
