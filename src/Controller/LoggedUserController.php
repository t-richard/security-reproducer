<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoggedUserController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/logged", name="logged_user")
     */
    public function index(): Response
    {
        return $this->render('logged_user/index.html.twig', [
            'controller_name' => 'LoggedUserController',
        ]);
    }
}
