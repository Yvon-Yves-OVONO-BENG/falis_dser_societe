<?php

namespace App\Form;

use App\Entity\Societe;
use App\Entity\FormeJuridique;
use Symfony\Component\Form\AbstractType;
use App\Repository\FormeJuridiqueRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SocieteType extends AbstractType
{
    protected $formeJuridiqueRepository;

    public function __construct(FormeJuridiqueRepository $formeJuridiqueRepository)
    {
        $this->formeJuridiqueRepository = $formeJuridiqueRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $formeJuridiques = $this->formeJuridiqueRepository->findAll();
        
        switch ($options['flow_step']) {
            case 1:
                $builder
                    ->add('formeJuridique', ChoiceType::class, [
                        'label' => false,
                        'choices' => $formeJuridiques,
                        'expanded' => true, 
                        'multiple' => false,
                        'choice_value' => 'id',
                        'choice_label' => function(?FormeJuridique $formeJuridique){
                            return $formeJuridique ? $formeJuridique->getSigle().' - '.$formeJuridique->getFormeJuridique(): '';
                        }
                    ])
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
