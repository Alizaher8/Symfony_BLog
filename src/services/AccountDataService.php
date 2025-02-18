<?php

namespace App\services;
use App\contract\UploadFile;
use Symfony\Component\Security\Core\User\UserInterface; // Example of correct import for UserInterface

class AccountDataService
{
    private UploadFile $uploadFile;

    public function __construct(UploadFile $uploadFile)
    {
        $this->uploadFile = $uploadFile;
    }

    public function fetch(UserInterface $user): array
    {
        
    }
    public function update(UserInterface $user)
    {
        
    }




}