<?php

namespace App\Form;

use App\Entity\DeclarationRelativeSociete;
use App\Entity\Devise;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeclarationRelativeSocieteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('denomination')
            ->add('sigle')
            ->add('statutLegalParticulier')
            ->add('dureeSociete')
            ->add('montantCapital')
            ->add('dateClotureExercice')
            ->add('dateCloturePremierExercice')
            ->add('adhesionPrincipeEconomieSocialSolidaire')
            ->add('societeAMission')
            ->add('listeActivitesprincipales', TextareaType::class, [
                
            ])
            ->add('devise', EntityType::class, [
                'class' => Devise::class,
                'choice_label' => 'devise',
                'label' => false,
                'placeholder' => 'Dévise'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DeclarationRelativeSociete::class,
        ]);
    }
}
