<?php

namespace App\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;

class SocieteFlow extends FormFlow 
{

    protected function loadStepsConfig()
    {
        $societeType = SocieteType::class;
        return [
            [
                'label' => "Choix du type d'entreprise",
                'form_type' => $societeType
            ],
            [
                'label' => 'Société',
                'form_type' => $societeType
            ], 
            [
                'label' => 'Etablissement et Activité',
                'form_type' => $societeType
            ],
            [
                'label' => 'Confirmation'
            ]
        
        ];
    }

}