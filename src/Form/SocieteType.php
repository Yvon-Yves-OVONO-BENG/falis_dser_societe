<?php

namespace App\Form;

use App\Entity\Societe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocieteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        switch ($options['flow_step']) {
            case 1:
                $builder
                    ->add('formeJuridique', FormeJuridiqueType::class)
                    ->add('societeConstitueAssocieUnique', null, [
                        'label' => "La société est constituée d'un associé unique"
                    ])
                    ->add('personneMoraleConstitueSansActivite', null, [
                        'label' => "La personne morale est constituée sans exercer d'activité"
                    ])
                ;
                break;

            case 2:
                $builder
                    ->add('declarationRelativeSociete', DeclarationRelativeSocieteType::class)
                ;
                break;

            case 3:
                $builder
                    ->add('telephone')
                    ->add('email')
                ;
                break;
        }
        // $builder
        //     ->add('effectifSalarieOuAssimile')
        //     
        //     
        //     ->add('commentaireDestinationGreffe')
        //     ->add('visualiserFormalite')
        //     ->add('paye')
        //     ->add('referenceFormalite')
        //     ->add('enregistreLe')
        //    
        //     ->add('siegeSocial')
        //     ->add('declarationRelativeEtablissementActive')
        //     ->add('impositionSurBenefice')
        //     ->add('optionParticuliereBenefice')
        //     ->add('regimeImpositionMatiereTVA')
        //     ->add('optionPArticuliereMAtiereTVA')
        //     ->add('adresseCorrespondance')
        //     ->add('declarant')
        //     ->add('document')
        //     ->add('modePaiement')
        // ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Societe::class,
        ]);
    }
}
