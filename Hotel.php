<?php

//namespace Htlw3r\m6-viewa-las-vegas;

class Hotel
{
    private string $name;
    private int $stars;
    private array $infos;
    private string $contact_address;
    private string $phone;
    private string $contact_opening_hours;
    private string $img_url;

    /**
     * hotel constructor.
     * @param string $name
     * @param int $stars
     * @param array $infos
     * @param string $contact_address
     * @param string $phone
     * @param string $contact_opening_hours
     */
    public function __construct(string $name, int $stars, array $infos, string $contact_address, string $phone, string $contact_opening_hours, string $img_url)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->infos = $infos;
        $this->contact_address = $contact_address;
        $this->phone = $phone;
        $this->contact_opening_hours = $contact_opening_hours;
        $this->img_url = $img_url;
    }

    /**
     * @return string
     */
    public function getImgUrl(): string
    {
        return $this->img_url;
    }

    public static function getDemoData(): array {
        return array(
            // new Hotel usw..
        );
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
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getContactOpeningHours(): string
    {
        return $this->contact_opening_hours;
    }


}