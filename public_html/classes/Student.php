<?php

namespace classes;

class Student
{
    private $name;
    private $gender;

//    public function __construct()
//    {
//    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
