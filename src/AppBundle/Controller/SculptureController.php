<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sculpture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sculpture controller.
 *
 * @Route("sculpture")
 */
class SculptureController extends Controller
{
    /**
     * Lists all sculpture entities.
     *
     * @Route("/", name="sculpture_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sculptures = $em->getRepository('AppBundle:Sculpture')->findAll();

        return $this->render('sculpture/index.html.twig', array(
            'sculptures' => $sculptures,
        ));
    }

    /**
     * Creates a new sculpture entity.
     *
     * @Route("/new", name="sculpture_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sculpture = new Sculpture();
        $form = $this->createForm('AppBundle\Form\SculptureType', $sculpture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sculpture);
            $em->flush($sculpture);

            return $this->redirectToRoute('sculpture_show', array('id' => $sculpture->getId()));
        }

        return $this->render('sculpture/new.html.twig', array(
            'sculpture' => $sculpture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sculpture entity.
     *
     * @Route("/{id}", name="sculpture_show")
     * @Method("GET")
     */
    public function showAction(Sculpture $sculpture)
    {
        $deleteForm = $this->createDeleteForm($sculpture);

        return $this->render('sculpture/show.html.twig', array(
            'sculpture' => $sculpture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sculpture entity.
     *
     * @Route("/{id}/edit", name="sculpture_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sculpture $sculpture)
    {
        $deleteForm = $this->createDeleteForm($sculpture);
        $editForm = $this->createForm('AppBundle\Form\SculptureType', $sculpture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sculpture_edit', array('id' => $sculpture->getId()));
        }

        return $this->render('sculpture/edit.html.twig', array(
            'sculpture' => $sculpture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sculpture entity.
     *
     * @Route("/{id}", name="sculpture_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sculpture $sculpture)
    {
        $form = $this->createDeleteForm($sculpture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sculpture);
            $em->flush($sculpture);
        }

        return $this->redirectToRoute('sculpture_index');
    }

    /**
     * Creates a form to delete a sculpture entity.
     *
     * @param Sculpture $sculpture The sculpture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sculpture $sculpture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sculpture_delete', array('id' => $sculpture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
