<?php

namespace Controllers\Auth\User;

use FFI\Exception;


class User 
{   
    public string $name;
    public string $email;
    public string $password;
    public string $confirmPassword;

    // public function __construct(
    //     // string $name, 
    //     // string $password, 
    //     // string $confirmPassword
    //     )
    // {
    //     // $this->name = $name;
    //     // $this->password = $password;
    //     // $this->confirmPassword = $confirmPassword;

    // }

    public function setName(string $name)
    {
        if ($name === null) {
            throw new Exception('El nombre no puede ser nulo.');
            // echo "No puede ser nulo";
        }

        $this->name = $name;
        $name = strtolower($name);

        return $name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
        $email = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);

        return $email;
        
    }

    public function getName(): string
    {
        return $this->name;
    }

}
