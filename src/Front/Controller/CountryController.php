<?php

namespace App\Front\Controller;

use App\Front\Controller\AbstractController;

class CountryController extends AbstractController
{
    public function country(array $uriVars = [])
    {
        $date = new \DateTime();

        $this->render('country/index', [

            'date' => $date->format('d/m/Y')
        ]);
    }
}
