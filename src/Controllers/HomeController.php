<?php

require_once __DIR__ . '/../Services/Response.php';

class HomeController
{
    use Response;

    public function index()
    {
        $title = "Accueil";

        $viewData = [
            'title' => $title
        ];

        $this->render('HomePageTemplate', $viewData);
    }

    public function pageNotFound()
    {
        $this->render('404');
    }
}
