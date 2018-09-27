<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserDataRepository")
 */
class UserData
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
    private $ip_address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $state_prov;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Geoaddress", mappedBy="user_data", cascade={"persist", "remove"})
     */
    private $geoaddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIpAddress(): ?string
    {
        return $this->ip_address;
    }

    public function setIpAddress(string $ip_address): self
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getStateProv(): ?string
    {
        return $this->state_prov;
    }

    public function setStateProv(string $state_prov): self
    {
        $this->state_prov = $state_prov;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getGeoaddress(): ?Geoaddress
    {
        return $this->geoaddress;
    }

    public function setGeoaddress(?Geoaddress $geoaddress): self
    {
        $this->geoaddress = $geoaddress;

        // set (or unset) the owning side of the relation if necessary
        $newUser_data = $geoaddress === null ? null : $this;
        if ($newUser_data !== $geoaddress->getUserData()) {
            $geoaddress->setUserData($newUser_data);
        }

        return $this;
    }
}
