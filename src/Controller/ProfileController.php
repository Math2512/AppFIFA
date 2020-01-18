<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(UserRepository $repo, UserInterface $userInterface)
    {
        $user_id = $userInterface->getId();
        $user = $repo->findUserById($user_id);

        return $this->render('profile/index.html.twig', [
            'courant_menu' => 'profile',
            'user' => $user[0]
        ]);
    }
}
