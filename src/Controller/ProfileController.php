<?php

declare(strict_types=1);

namespace App\Controller;

use App\contract\UploadFile;
use App\services\AccountDataService;
use App\services\FollowService;
use App\services\PostServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{

    private AccountDataService $accountService;
    private PostServices $postServices;
    private FollowService $followService;

    public function __construct(AccountDataService $accountService, PostServices $postServices, FollowService $followService, UploadFile $uploadFile)
    {
        $this->accountService = $accountService;
        $this->postServices = $postServices;
        $this->followService = $followService;
    }

    #[Route('/profile', name: 'profile_page')]
    public function profile(): Response
    {
        return $this->render('profile.html.twig');
    }
    #[Route('/view-profile/{id}', name: 'view_profile_page',methods: ['GET'])]
    public function viewProfile(int $id): Response
    {
        return $this->render('viewprofile.html.twig',['id' =>$id]);
    }
}
