<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\winkel;
use AppBundle\Form\Type\winkelType;
use AppBundle\Entity\personeelslid;
use AppBundle\Form\Type\personeelslidType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
    * @Route ("/personeelslid/nieuw ", name="personeelslidnieuw")
    */
    public function nieuwepersoneelslid(Request $request){
        $nieuwepersoneelslid = new personeelslid();
        $form = $this->createForm(personeelslidType::class, $nieuwepersoneelslid);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwepersoneelslid);
            $em->flush();
            return $this->redirect($this->generateurl("personeelslidnieuw"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
    * @Route ("/personeelslid/wijzig/{id} ", name="personeelslidwijzigen")
    */
    public function wijzigpersoneelslid(Request $request, $id){
        $bestaandepersoneelslid = $this->getDoctrine()->getRepository("AppBundle:personeelslid")->find($id);
        $form = $this->createForm(personeelslidType::class, $bestaandepersoneelslid);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandepersoneelslid);
            $em->flush();
            return $this->redirect($this->generateurl("personeelslidwijzigen", array("id" => $bestaandepersoneelslid->getId())));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
    * @Route ("/personeelsleden/alle", name="allepersoneelsleden")
    */
    public function allepersoneelsleden(Request $request){
        $personeelsleden = $this->getDoctrine()->getRepository("AppBundle:personeelslid")->findAll();

        return new Response($this->render('personeelsleden.html.twig', array('personeelsleden' => $personeelsleden)));
    }

    /**
    * @Route ("/personeelsleden/verwijderen/{id} ", name="personeelsledenverwijderen")
    */
    public function verwijderpersoneelsleden(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandepersoneelsleden = $em->getRepository("AppBundle:personeelsleden")->find($id);
        $em->remove($bestaandepersoneelsleden);
        $em->flush();



        return new Response($this->redirect($this->generateurl("allepersoneelsleden")));
    }


}
