<?php

class RegisterController
{


    public function index()
    {
        require __DIR__ . "../register.php";
    }


    public function pageNotFound()
    {
        echo ("<p>Page introuvable</p>");
    }
}