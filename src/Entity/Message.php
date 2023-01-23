<?php
// src/Entity/Message.php
namespace App\Entity;

class Message
{
    
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $message;

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstname)
    {
        $this->firstName = $firstname;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastname)
    {
        $this->lastName = $lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
