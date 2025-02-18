<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin-login', name: 'admin_login_page')]
    public function adminLogin(): Response
    {
        return $this->render('admin/adminlogin.html.twig');
    }
    #[Route('/admin-postdeleted', name: 'admin_postdeleted_page')]
    public function adminDashboard(): Response
    {
        return $this->render( 'admin/postdeleted.html.twig');
    }
    #[Route('/users', name: 'users_page')]

    public function allUsers(): Response
    {
        return $this->render('admin/allusers.html.twig');
    }

    #[Route('/admin-home', name: 'admin_home_page')]

    public function home(): Response
    {
        return $this->render('admin/admin_homePage.html.twig');
    }

}
