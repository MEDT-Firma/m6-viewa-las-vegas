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
            new Hotel("Hotel Bellagio",5,["5 Sterne (★★★★★)", "ab 205€ pro Nacht", "Kostenloses WLAN"],"3600 S Las Vegas Blvd, Las Vegas, NV 89109,
                        Vereinigte Staaten", "+1 888-987-6667", "Rund um die Uhr geöffnet", "images/Bellagio.jpg"),
            new Hotel("Hotel Paris", 4, ["4 Sterne (★★★★)", "ab 80€ pro Nacht", "Kostenloses WLAN"], "3655 S Las Vegas Blvd, Las Vegas, NV 89109,
                        Vereinigte Staaten", " +1 877-796-2096", "Rund um die Uhr geöffnet", "images/Paris.jpg"),
            new Hotel("Hotel Circa", 5, ["5 Sterne (★★★★★)", "ab 140€ pro Nacht", "Kostenloses WLAN"], "8 Fremont Street Experience, Las Vegas, NV 89101, Vereinigte Staaten", "+1 702-247-2258", "Rund um die Uhr geöffnet", "images/Circa.jpg" ),
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