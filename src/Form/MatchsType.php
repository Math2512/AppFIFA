<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Matchs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('journee')
            ->add('resultat_j1')
            ->add('resultat_j2')
            ->add('Joueurs1', EntityType::class, [
                'class' => User::class, 
                'choice_label'=>'username'])
            ->add('Joueurs2', EntityType::class, [
                'class' => User::class, 
                'choice_label'=>'username'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Matchs::class,
        ]);
    }
}
