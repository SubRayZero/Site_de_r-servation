<?php

class HomeController
{


    public function index()
    {
        require __DIR__ . "../index.php";
    }


    public function pageNotFound()
    {
        echo ("<p>Page introuvable</p>");
    }
}