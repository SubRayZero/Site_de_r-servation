<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/WeaponRepository.php';

class WeaponController
{

    use Response;


    public function index()
    {

        $WeaponRepository= new WeaponRepository();
        $weapon = $WeaponRepository->getAll();

        $viewData = [
            'weapon' => $weapon
        ];

        $this->render('AccountPageTemplate', $viewData);
    }
}