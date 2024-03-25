<?php

require_once __DIR__ . '/../Services/Response.php';

class SkinController
{

    use Response;


    public function index()
    {

        $SkinRepository= new SkinRepository();
        $Skin = $SkinRepository->getAll();

        $viewData = [
            'Skin' => $Skin
        ];

        $this->render('ReservationPageTemplate', $viewData);
    }
}
