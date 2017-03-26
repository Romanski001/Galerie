<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Collage controller.
 *
 * @Route("collage")
 */
class CollageController extends Controller
{
    /**
     * Lists all collage entities.
     *
     * @Route("/", name="collage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $collages = $em->getRepository('AppBundle:Collage')->findAll();

        return $this->render('collage/index.html.twig', array(
            'collages' => $collages,
        ));
    }

    /**
     * Creates a new collage entity.
     *
     * @Route("/new", name="collage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $collage = new Collage();
        $form = $this->createForm('AppBundle\Form\CollageType', $collage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($collage);
            $em->flush($collage);

            return $this->redirectToRoute('collage_show', array('id' => $collage->getId()));
        }

        return $this->render('collage/new.html.twig', array(
            'collage' => $collage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a collage entity.
     *
     * @Route("/{id}", name="collage_show")
     * @Method("GET")
     */
    public function showAction(Collage $collage)
    {
        $deleteForm = $this->createDeleteForm($collage);

        return $this->render('collage/show.html.twig', array(
            'collage' => $collage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing collage entity.
     *
     * @Route("/{id}/edit", name="collage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Collage $collage)
    {
        $deleteForm = $this->createDeleteForm($collage);
        $editForm = $this->createForm('AppBundle\Form\CollageType', $collage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('collage_edit', array('id' => $collage->getId()));
        }

        return $this->render('collage/edit.html.twig', array(
            'collage' => $collage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a collage entity.
     *
     * @Route("/{id}", name="collage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Collage $collage)
    {
        $form = $this->createDeleteForm($collage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($collage);
            $em->flush($collage);
        }

        return $this->redirectToRoute('collage_index');
    }

    /**
     * Creates a form to delete a collage entity.
     *
     * @param Collage $collage The collage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Collage $collage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('collage_delete', array('id' => $collage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
