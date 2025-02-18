<?php

namespace App\services;

use App\contract\UploadFile;

class LocalUploadFileService implements UploadFile
{
    public function uploadFile(): string
    {
       return 'upload';
    }
}