<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TechniquesMixtes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Techniquesmixte controller.
 *
 * @Route("techniquesmixtes")
 */
class TechniquesMixtesController extends Controller
{
    /**
     * Lists all techniquesMixte entities.
     *
     * @Route("/", name="techniquesmixtes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $techniquesMixtes = $em->getRepository('AppBundle:TechniquesMixtes')->findAll();

        return $this->render('techniquesmixtes/index.html.twig', array(
            'techniquesMixtes' => $techniquesMixtes,
        ));
    }

    /**
     * Creates a new techniquesMixte entity.
     *
     * @Route("/new", name="techniquesmixtes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $techniquesMixte = new Techniquesmixte();
        $form = $this->createForm('AppBundle\Form\TechniquesMixtesType', $techniquesMixte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($techniquesMixte);
            $em->flush($techniquesMixte);

            return $this->redirectToRoute('techniquesmixtes_show', array('id' => $techniquesMixte->getId()));
        }

        return $this->render('techniquesmixtes/new.html.twig', array(
            'techniquesMixte' => $techniquesMixte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a techniquesMixte entity.
     *
     * @Route("/{id}", name="techniquesmixtes_show")
     * @Method("GET")
     */
    public function showAction(TechniquesMixtes $techniquesMixte)
    {
        $deleteForm = $this->createDeleteForm($techniquesMixte);

        return $this->render('techniquesmixtes/show.html.twig', array(
            'techniquesMixte' => $techniquesMixte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing techniquesMixte entity.
     *
     * @Route("/{id}/edit", name="techniquesmixtes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TechniquesMixtes $techniquesMixte)
    {
        $deleteForm = $this->createDeleteForm($techniquesMixte);
        $editForm = $this->createForm('AppBundle\Form\TechniquesMixtesType', $techniquesMixte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('techniquesmixtes_edit', array('id' => $techniquesMixte->getId()));
        }

        return $this->render('techniquesmixtes/edit.html.twig', array(
            'techniquesMixte' => $techniquesMixte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a techniquesMixte entity.
     *
     * @Route("/{id}", name="techniquesmixtes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TechniquesMixtes $techniquesMixte)
    {
        $form = $this->createDeleteForm($techniquesMixte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($techniquesMixte);
            $em->flush($techniquesMixte);
        }

        return $this->redirectToRoute('techniquesmixtes_index');
    }

    /**
     * Creates a form to delete a techniquesMixte entity.
     *
     * @param TechniquesMixtes $techniquesMixte The techniquesMixte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TechniquesMixtes $techniquesMixte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('techniquesmixtes_delete', array('id' => $techniquesMixte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
