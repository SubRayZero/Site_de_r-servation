<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/SkinRepository.php';

class SkinController
{
    use Response;

    public function skin()
    {
        $SkinRepository = new SkinRepository();
        $skin = $SkinRepository->getAll();

        return $skin;
    }

    public function index()
    {
        $skins = $this->skin();

        $viewData = [
            '
        skins' => $skins
        
        ];
        $this->render('ReservationPageTemplate', $viewData);
    }
}
