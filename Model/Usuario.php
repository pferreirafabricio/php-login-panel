<?php

class Usuario
{
    private $name;
    private $email;
    private $password;
    private $date;

    public function setName($pName)
    {
        $this->name = $pName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($pEmail)
    {
        $this->email = $pEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($pPassword)
    {
        $this->password = md5($pPassword);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setDate($pDate)
    {
        $this->date = $pDate;
    }

    public function getDate()
    {
        return $this->date;
    }
}
