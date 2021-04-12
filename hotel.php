<?php

//namespace Htlw3r\m6-viewa-las-vegas;

class hotel
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}