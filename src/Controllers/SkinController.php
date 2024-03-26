<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/SkinRepository.php';

class SkinController
{

    use Response;


    public function index()
    {

        $SkinRepository= new SkinRepository();
        $Skins = $SkinRepository->getAll();

        $viewData = [
            'skin' => $Skins
        ];

        $this->render('ReservationPageTemplate', $viewData);
    }
}
