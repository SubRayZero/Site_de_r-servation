<?php

class LoginController
{


    public function index()
    {
        require __DIR__ . "../toLogIn.php";
    }


    public function pageNotFound()
    {
        echo ("<p>Page introuvable</p>");
    }
}