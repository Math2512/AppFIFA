<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\MatchsRepository;
use App\Repository\ClassementRepository;
use App\Repository\ChampionnatsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TournamentController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserRepository $repo, UserInterface $user = null, ClassementRepository $classementRepo)
    {
        if($user){
            $users = $repo->findBy(array('id' => $user->getId()))[0];
            $championnats = $users->getChampionnats();
            foreach($championnats as $championnat)
            {
                $classements[] = $classementRepo->findByOrder($championnat);
            }
        }
        else{
            $championnats = array();
            $classements = array();
        }

        return $this->render('tournament/index.html.twig', [
            'courant_menu' => 'home',
            'championnats' => $championnats,
            'classements'  => $classements
        ]);
    }

}
