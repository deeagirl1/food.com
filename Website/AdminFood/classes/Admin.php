<?php
class Admin
{
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $password;

    public function GetId() : int
    {
        return $this->id;
    }
    public function GetEmail() : string
    {
        return $this->email;
    }
    public function SetEmail(string $firstName)
    {
        $this->email = $email;
    }
    public function GetFirstName() : string
    {
        return $this->firstName;
    }
    public function SetFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }
    public function GetLastName() : string
    {
        return $this->lastName;
    }
    public function SetLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }
    public function GetPassword() : string
    {
        return $this->password;
    }

    public function __construct(int $id = 0,string $email, string $firstName, string $lastName, string $password)
    {
        $this->id = $id;    
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password= $password;
    }
}
?>