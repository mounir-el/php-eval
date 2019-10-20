<?php

namespace App\API\Controller;

use App\API\Controller\AbstractController;

use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }
    public function country(array $uriVars = [])
    {
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        $this->render([
            'country' => $this->countryRepository->findAll()
        ]);
    }
}
