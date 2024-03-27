<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/ReservationRepository.php';
require_once __DIR__ . '/LoginController.php';
require_once __DIR__ . '/WeaponController.php';

class ReservationController
{
    use Response;

    public function Reservation()
    {
       
        session_start();
        $id_person = $_SESSION['user_id'];
        $id_arme = $_SESSION['id_weapon'];

        print_r($id_arme);

        if (
            $_SERVER["REQUEST_METHOD"] === "POST"
            && isset($id_person)
            && isset($id_arme)
        ) {
            $date = $_POST['date'];
            $ReservationRepository = new ReservationRepository();
            $reservation = $ReservationRepository->create($date, $id_person, $id_arme);

            if (isset($reservation)) {
                
                header("Location: ReservationPageTemplate.php");
                exit;
            } else {
                header("Location: AccountPageTemplate.php");
            }
        }
    }


    public function index()
    {
        $this->Reservation();

        $this->render('ReservationPageTemplate');
    }
}
