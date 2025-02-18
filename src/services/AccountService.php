<?php

namespace App\services;

class AccountService
{
    private EmailService $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function registerNewUser()
    {

    }

    public function forgetPassword()
    {

    }
}