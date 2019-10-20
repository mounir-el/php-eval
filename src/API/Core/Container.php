<?php

namespace App\API\Core;

class Container
{
	private $services = [];

	public function get(string $idService)
	{
		$this->services = [
			'controller.homepage' => function () {
				return new \App\API\Controller\HomepageController(
					$this->services['repository.city']()
				);
			},
			'controller.not.found' => function () {
				return new \App\API\Controller\NotFoundController();
			},
			'core.dotenv' => function () {
				return new \App\API\Core\Dotenv();
			},
			'core.database' => function () {
				return new \App\API\Core\Database(
					$this->services['core.dotenv']()
				);
			},
			'repository.city' => function () {
				return new \App\API\Repository\CityRepository(
					$this->services['core.database']()
				);
			},
			'controller.country' => function () {
				return new \App\API\Controller\CountryController(
					$this->services['repository.country']()
				);
			},
			'repository.country' => function () {
				return new \App\API\Repository\CountryRepository(
					$this->services['core.database']()
				);
			},

		];

		return $this->services[$idService]();
	}
}
