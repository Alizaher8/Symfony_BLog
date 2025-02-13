<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class notificationController extends AbstractController
{
    #[Route('/notification',name: 'notification-page', methods: ['GET'])]
    public function notification(): Response
    {
        return $this->render('notification.html.twig');
    }
}
