<?php

namespace classes\employees;

class Teacher
{
    private $name;
    private $gender;

    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }
}
