<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191019 extends AbstractMigrations
{
	protected $sql = "
		INSERT INTO destination.city
		VALUES
			(NULL, 'Paris', 'https://ssl.tzoo-img.com/images/tzoo.99175.0.797942.paris.jpg?width=392&v=2&spr=3'),
			(NULL, 'Tokyo', 'https://www.partir.com/images/incontournables/japon-tokyo-shinjuku.jpg'),
			(NULL, 'Londres', 'https://voyageursintrepides.com/wp-content/uploads/2018/07/que-faire-soir-nuit-londres-sortir.jpg')
		;
		INSERT INTO destination.country
		VALUES
			(NULL, 'France', '1'),
			(NULL, 'Japan', '2'),
			(NULL, 'Royaume-Uni', '3')
		;
	";
}
