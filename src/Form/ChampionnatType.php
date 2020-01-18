<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Championnats;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChampionnatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbr_jours')
            ->add('users', EntityType::class, [
                'class' => User::class, 
                'choice_label'=>'username',
                'multiple'=>true            
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Championnats::class,
        ]);
    }
}
