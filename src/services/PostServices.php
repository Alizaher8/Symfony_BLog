<?php

namespace App\services;


use App\contract\UploadFile;
use Symfony\Component\Security\Core\User\UserInterface;

class PostServices
{
    private $uploadFile;
   public function __construct(UploadFile $uploadFile)
   {
       $this->uploadFile = $uploadFile;
   }

    public function addPost()
    {

    }
    public function getPosts(UserInterface $user = null):array
    {

    }
    public function likePost()
    {

    }
    public function commentPost()
    {

    }

}