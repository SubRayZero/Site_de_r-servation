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

        if (isset($_POST['id_weapon'])) {
            $_SESSION['id_weapon'] = $_POST['id_weapon'];
        }
        $id_person = $_SESSION['user_id'];
        $id_weapon = $_SESSION['id_weapon'];

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['date'])) {

            $_SESSION['id_weapon'] = $_POST['id_weapon'];
            $id_person = $_SESSION['user_id'];
            $id_weapon = $_SESSION['id_weapon'];

            $date = $_POST['date'];
            $date = date('Y-m-d', strtotime($date));

            $ReservationRepository = new ReservationRepository();
            $reservation = $ReservationRepository->create($date, $id_weapon, $id_person);

            header("Location: AccountPageTemplate.php");
            exit;

            return $reservation;
        }
    }

    public function index()
    {
        $this->Reservation();
        $this->render('ReservationPageTemplate');
    }
}
