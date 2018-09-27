<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeoaddressRepository")
 */
class Geoaddress
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="array")
     */
    private $geocode = [];

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserData", inversedBy="geoaddress", cascade={"persist", "remove"})
     */
    private $user_data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getGeocode(): ?array
    {
        return $this->geocode;
    }

    public function setGeocode(array $geocode): self
    {
        $this->geocode = $geocode;

        return $this;
    }

    public function getUserData(): ?UserData
    {
        return $this->user_data;
    }

    public function setUserData(?UserData $user_data): self
    {
        $this->user_data = $user_data;

        return $this;
    }
}
