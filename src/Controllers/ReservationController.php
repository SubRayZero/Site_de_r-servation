<?php

class ReservationController
{


    public function index()
    {
        require __DIR__ . "../reservation.php";
    }


    public function pageNotFound()
    {
        echo ("<p>Page introuvable</p>");
    }
}
