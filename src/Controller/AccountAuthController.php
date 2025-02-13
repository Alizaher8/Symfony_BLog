<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccountAuthController extends AbstractController
{
    #[Route('/login',name: 'login_page')]
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }
    #[Route('/register', name: 'register_page')]
    public function register(): Response
    {
        return $this->render('register.html.twig');
    }
    #[Route('/forget-password', name: 'forget_password_page')]
    public function forgetPassword(): Response
    {
        return $this->render('forgetpassword.html.twig');
    }
}
