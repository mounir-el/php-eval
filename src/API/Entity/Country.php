<?php

namespace App\API\Entity;

class Country implements \JsonSerializable
{
    private $id;
    private $name;
    private $city_id;
    private $city;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityId(),
            'city' => $this->getCity(),
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCityId(): string
    {
        return $this->city_id;
    }
    public function setCityId(string $city_id): void
    {
        $this->city_id = $city_id;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
}
