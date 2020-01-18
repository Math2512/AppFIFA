<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Matchs;
use App\Form\MatchType;
use App\Form\MatchsType;
use App\Entity\Classement;
use App\Entity\Championnats;
use App\Form\UserUpdateType;
use App\Form\ChampionnatType;
use App\Form\InscriptionType;
use App\Repository\UserRepository;
use App\Repository\MatchsRepository;
use App\Repository\ClassementRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AdminController extends AbstractController
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @Route("/championnats", name="admin")
     */
    public function index(UserRepository $repo, UserInterface $user, ClassementRepository $classementRepo)
    {
        $users = $repo->findBy(array('id' => $user->getId()))[0];
        $championnats = $users->getChampionnats();
        return $this->render('admin/index.html.twig', [
            'courant_menu' => 'admin',
            'championnats' => $championnats
        ]);
    }

    /**
     * @Route("/championnats/editMatch/{id}", name="editMatch")
     */
    public function editMatch(Championnats $championnat, Matchs $match = null, Request $request, ObjectManager $manager, MatchsRepository $matchRepo, ClassementRepository $classementRepo)
    {
        if(!$match)
            $match = New Matchs();
        $form = $this->createForm(MatchsType::class, $match);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $match->setChampionnat($championnat);
            $manager->persist($match);
            $manager->flush();

            if($match->getResultatJ1() > $match->getResultatJ2())
            {

                $classementId = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(),$match->getChampionnat()->getId())));
                $classement->setPts($classementId->getPts()+3);
                $classement->setG($classementId->getG()+1);
                $classement->setBp($classementId->getBp()+$match->getResultatJ1());
                $classement->setBc($classementId->getBc()+$match->getResultatJ2());
                $classement->setDb($classementId->getDb()+($match->getResultatJ1() - $match->getResultatJ2()));

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());
                
                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(),$match->getChampionnat()->getId())));
                $classement2->setD($classementJ->getD()+1);
                $classement2->setBp($classementJ->getBp()+$match->getResultatJ2());
                $classement2->setBc($classementJ->getBc()+$match->getResultatJ1());
                $classement2->setDb($classementJ->getDb()+($match->getResultatJ2() - $match->getResultatJ1()));

                $manager->persist($classement2);
                $manager->flush();
            }
            else if($match->getResultatJ1() < $match->getResultatJ2())
            {
                $classementId = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(),$match->getChampionnat()->getId())));
                $classement->setPts($classementId->getPts()+3);
                $classement->setG($classementId->getG()+1);
                $classement->setBp($classementId->getBp()+$match->getResultatJ2());
                $classement->setBc($classementId->getBc()+$match->getResultatJ1());
                $classement->setDb($classementId->getDb()+($match->getResultatJ2() - $match->getResultatJ1()));

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());
                
                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(),$match->getChampionnat()->getId())));
                $classement2->setD($classementJ->getD()+1);
                $classement2->setBp($classementJ->getBp()+$match->getResultatJ1());
                $classement2->setBc($classementJ->getBc()+$match->getResultatJ2());
                $classement2->setDb($classementJ->getDb()+($match->getResultatJ1() - $match->getResultatJ2()));

                $manager->persist($classement2);
                $manager->flush();
            }
            else if($match->getResultatJ1() == $match->getResultatJ2())
            {
                $classementId = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(),$match->getChampionnat()->getId())));
                $classement->setPts($classementId->getPts()+1);
                $classement->setN($classementId->getN()+1);
                $classement->setBp($classementId->getBp()+$match->getResultatJ1());
                $classement->setBc($classementId->getBc()+$match->getResultatJ2());

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());

                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(),$match->getChampionnat()->getId())));
                $classement2->setPts($classementJ->getPts()+1);
                $classement2->setN($classementJ->getN()+1);
                $classement2->setBp($classementJ->getBp()+$match->getResultatJ2());
                $classement2->setBc($classementJ->getBc()+$match->getResultatJ1());

                $manager->persist($classement2);
                $manager->flush();
            }

            return $this->redirectToRoute('championnat', [
                'id'   =>$championnat->getId()
                ]
            );
            
        }

        return $this->render('tournament/edit.html.twig', [
            'courant_menu' => 'admin',
            'matchs'       => $match,
            'form'         => $form->createView()
        ]); 
    }

    /**
     * @Route("/championnats/show/{id}", name="championnat")
     */
    public function ChampionnatShow(Championnats $championnat, Request $request, ObjectManager $manager, MatchsRepository $repoMatch, ClassementRepository $classementRepo)
    {
        $match = $repoMatch->findByExampleField($championnat);
        $journee = $repoMatch->findJournee($championnat);
        $classement = $classementRepo->findByOrder($championnat);

        return $this->render('tournament/championnat/show.html.twig', [
            'courant_menu' => 'admin',
            'championnat'  => $championnat,
            'users'        => $championnat->getUsers(),
            'matchs'       => $match,
            'journee'      => $journee,
            'classement'   => $classement
        ]); 
    }

    /**
     * @Route("/championnats/close/{id}", name="closeChampionnat")
     */
    public function ChampionnatClose(Championnats $championnat, UserRepository $userRepo, Request $request, ObjectManager $manager, ClassementRepository $classementRepo)
    {
        $matchNbr = (count($championnat->getUsers())*(count($championnat->getUsers())-1)/2) * $championnat->getNbrJours();
        $matchJoue= count($championnat->getMatchs());

        if($matchJoue < $matchNbr)
        {
            $this->addFlash('error', "Le nombre de match n'est pas valide !");
            return $this->redirectToRoute('championnat', [
                'id'   =>$championnat->getId()
                ]
            );
        }

        // $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs1()))-1);
        $championnat->setClose(1);
        $manager->persist($championnat);
        $manager->flush();

        $classement = $classementRepo->findPlayerWinner($championnat->getId())[0];
        
        $user = $userRepo->find($classement->getUser()->getId()); 
        $user->setVictory($user->getVictory()+1);
        $manager->persist($user);
        $manager->flush();

        return $this->redirectToRoute('championnat', [
            'id'   =>$championnat->getId()
            ]
        );
    }

    /**
     * @Route("/championnats/create", name="create_champ")
     */
    public function edit(Championnats $championnat = null, Request $request, ObjectManager $manager)
    {
        if(!$championnat)
            $championnat = new Championnats();

        $form = $this->createForm(ChampionnatType::class, $championnat);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($championnat);
            $manager->flush();
        
            foreach($championnat->getUsers() as $user)
            {
                
                $classement = new Classement();
                $classement->setChampionnat($championnat);
                $classement->setUser($user);
                $classement->setMj(0);
                $classement->setG(0);
                $classement->setD(0);
                $classement->setN(0);
                $classement->setBp(0);
                $classement->setBc(0);
                $classement->setDb(0);
                $classement->setPts(0);
                
                $manager->persist($classement);
                $manager->flush();

            }

            return $this->redirectToRoute('championnat', [
                'id'   =>$championnat->getId()
                ]
            );
        }


        return $this->render('tournament/create.html.twig', [
            'courant_menu' => 'admin',
            'form'         =>$form->createView()
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(User $user = null, Request $request, ObjectManager $manager, CacheManager $cache, UploaderHelper $helper)
    {
        if(!$user)
            $user = new User();

        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($user->getImageFile() instanceof UploadedFile)
            {
                $cache->remove($helper->asset($user, 'imageFile'));
            }
            if(!$user->getId()){
                $user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));
            }

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('admin/inscription.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/update/{id}", name="updateUser")
     */
    public function update(User $user = null, Request $request, ObjectManager $manager, CacheManager $cache, UploaderHelper $helper)
    {
        if(!$user)
            $user = new User();

        $form = $this->createForm(UserUpdateType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($user->getImageFile() instanceof UploadedFile)
            {
                $cache->remove($helper->asset($user, 'imageFile'));
            }

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('admin/inscription.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/championnats/delete/{id}", name="deleteMatch")
     */
    public function delete(Matchs $match, ObjectManager $manager, ClassementRepository $classementRepo, MatchsRepository $matchRepo)
    {
        if($match->getResultatJ1() > $match->getResultatJ2())
            {

                $classementId = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(), $match->getChampionnat()->getId()))-1);
                $classement->setPts($classementId->getPts()-3);
                $classement->setG($classementId->getG()-1);
                $classement->setBp($classementId->getBp()-$match->getResultatJ1());
                $classement->setBc($classementId->getBc()-$match->getResultatJ2());
                $classement->setDb($classementId->getDb()-($match->getResultatJ1() - $match->getResultatJ2()));

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());
                
                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(), $match->getChampionnat()->getId()))-1);
                $classement2->setD($classementJ->getD()-1);
                $classement2->setBp($classementJ->getBp()-$match->getResultatJ2());
                $classement2->setBc($classementJ->getBc()-$match->getResultatJ1());
                $classement2->setDb($classementJ->getDb()-($match->getResultatJ2() - $match->getResultatJ1()));

                $manager->persist($classement2);
                $manager->flush();
            }
            else if($match->getResultatJ1() < $match->getResultatJ2())
            {
                $classementId = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(), $match->getChampionnat()->getId()))-1);
                $classement->setPts($classementId->getPts()-3);
                $classement->setG($classementId->getG()-1);
                $classement->setBp($classementId->getBp()-$match->getResultatJ2());
                $classement->setBc($classementId->getBc()-$match->getResultatJ1());
                $classement->setDb($classementId->getDb()-($match->getResultatJ2() - $match->getResultatJ1()));

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());
                
                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(), $match->getChampionnat()->getId()))-1);
                $classement2->setD($classementJ->getD()-1);
                $classement2->setBp($classementJ->getBp()-$match->getResultatJ1());
                $classement2->setBc($classementJ->getBc()-$match->getResultatJ2());
                $classement2->setDb($classementJ->getDb()-($match->getResultatJ1() - $match->getResultatJ2()));

                $manager->persist($classement2);
                $manager->flush();
            }
            else if($match->getResultatJ1() == $match->getResultatJ2())
            {
                $classementId = $classementRepo->findPlayer($match->getJoueurs1()->getId(), $match->getChampionnat()->getId())[0];
                $classement   = $classementRepo->find($classementId->getId());
                
                
                $classement->setMj(count($matchRepo->findJoueurs($match->getJoueurs1(), $match->getChampionnat()->getId()))-1);
                $classement->setPts($classementId->getPts()-1);
                $classement->setN($classementId->getN()-1);
                $classement->setBp($classementId->getBp()-$match->getResultatJ1());
                $classement->setBc($classementId->getBc()-$match->getResultatJ2());

                $manager->persist($classement);
                $manager->flush();

                $classementJ   = $classementRepo->findPlayer($match->getJoueurs2()->getId(), $match->getChampionnat()->getId())[0];
                $classement2   = $classementRepo->find($classementJ->getId());

                $classement2->setMj(count($matchRepo->findJoueurs($match->getJoueurs2(), $match->getChampionnat()->getId()))-1);
                $classement2->setPts($classementJ->getPts()-1);
                $classement2->setN($classementJ->getN()-1);
                $classement2->setBp($classementJ->getBp()-$match->getResultatJ2());
                $classement2->setBc($classementJ->getBc()-$match->getResultatJ1());

                $manager->persist($classement2);
                $manager->flush();
            }

        $a = $match->getChampionnat()->getId();
        $manager->remove($match);
        $manager->flush();

        

        return $this->redirectToRoute('championnat', [
            'id'   =>$a
            ]
        );
    }
    
}
