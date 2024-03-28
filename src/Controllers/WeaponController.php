<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/WeaponRepository.php';

class WeaponController
{

    use Response;


    public function weapon()
    {

        if (
            $_SERVER["REQUEST_METHOD"] === "POST"
        ) {

            $_SESSION['id_weapon'] = $_POST['id_weapon'];
            //$id_person = $_SESSION['user_id'];

            $WeaponRepository = new WeaponRepository();
            $weapon = $WeaponRepository->getAll();

            session_start();
            $_SESSION["id_weapon"] = $weapon["id_weapon"];
            header("Location: AccountPageTemplate.php");
        }
    }


    public function index()
    {

        $Weapon = $this->weapon();

        $viewData = [
            'weapon' => $Weapon
        ];

        $this->render('AccountPageTemplate', $viewData);
    }
}
