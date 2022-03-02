<?php

namespace App\Controller;

use App\Entity\Societe;
use App\Form\SocieteFlow;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Craue\FormFlowBundle\Form\FormFlowInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/demarche_en_ligne')]
class DemarcheEnLigneController extends AbstractController
{
	protected $em;

	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}

    #[Route('/immatriculer_entreprise', name: 'demarche_en_ligne_immatriculer_entreprise')]
    public function immatriculer_entreprise(Request $request, SocieteFlow $flow): Response
    {
		dump($request->getSession());
		
        $flow->setAllowDynamicStepNavigation(true);

		$societe = new Societe;
		$flow->bind($societe);

		// formulaire de l'étape en cours
		$form = $flow->createForm();
		dump($societe);
		if($flow->isValid($form))
		{
			$flow->saveCurrentStepData($form);

			if($flow->nextStep()){
				// formulaire de l'étape suivante
				$form = $flow->createForm();
			}else {
				// Fin des étapes
				dd($societe);
				$this->em->persist($societe);
				$this->em->flush();

				// Supprimes les données des étapes de la session
				$flow->reset();

				return $this->redirectToRoute('home');
			}
		}

        return $this->render('demarche_en_ligne/immatriculer_entreprise.html.twig', [
            'societeForm' => $form->createView(),
			'flow' => $flow
        ]);
    }

}
