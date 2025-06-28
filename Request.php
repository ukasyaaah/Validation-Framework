<?php

class LoginRequest
{
    public ?string $username;
    public ?string $password;
}

class RegisterRequest
{
    public ?string $username;
    public ?string $email;
    public ?string $password;
}
