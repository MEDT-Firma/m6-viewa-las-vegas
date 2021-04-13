<?php

//namespace Htlw3r\m6-viewa-las-vegas;

class hotel
{
    private string $name;
    private int $stars;
    private array $infos;
    private string $contact_address;
    private string $contact_phone;
    private string $contact_opening_hours;

    /**
     * hotel constructor.
     * @param string $name
     * @param int $stars
     * @param array $infos
     * @param string $contact_address
     * @param string $contact_phone
     * @param string $contact_opening_hours
     */
    public function __construct(string $name, int $stars, array $infos, string $contact_address, string $contact_phone, string $contact_opening_hours)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->infos = $infos;
        $this->contact_address = $contact_address;
        $this->contact_phone = $contact_phone;
        $this->contact_opening_hours = $contact_opening_hours;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @return array
     */
    public function getInfos(): array
    {
        return $this->infos;
    }

    /**
     * @return string
     */
    public function getContactAddress(): string
    {
        return $this->contact_address;
    }

    /**
     * @return string
     */
    public function getContactPhone(): string
    {
        return $this->contact_phone;
    }

    /**
     * @return string
     */
    public function getContactOpeningHours(): string
    {
        return $this->contact_opening_hours;
    }


}