<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Photographie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Photographie controller.
 *
 * @Route("photographie")
 */
class PhotographieController extends Controller
{
    /**
     * Lists all photographie entities.
     *
     * @Route("/", name="photographie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $photographies = $em->getRepository('AppBundle:Photographie')->findAll();

        return $this->render('photographie/index.html.twig', array(
            'photographies' => $photographies,
        ));
    }

    /**
     * Creates a new photographie entity.
     *
     * @Route("/new", name="photographie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $photographie = new Photographie();
        $form = $this->createForm('AppBundle\Form\PhotographieType', $photographie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($photographie);
            $em->flush($photographie);

            return $this->redirectToRoute('photographie_show', array('id' => $photographie->getId()));
        }

        return $this->render('photographie/new.html.twig', array(
            'photographie' => $photographie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a photographie entity.
     *
     * @Route("/{id}", name="photographie_show")
     * @Method("GET")
     */
    public function showAction(Photographie $photographie)
    {
        $deleteForm = $this->createDeleteForm($photographie);

        return $this->render('photographie/show.html.twig', array(
            'photographie' => $photographie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing photographie entity.
     *
     * @Route("/{id}/edit", name="photographie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Photographie $photographie)
    {
        $deleteForm = $this->createDeleteForm($photographie);
        $editForm = $this->createForm('AppBundle\Form\PhotographieType', $photographie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('photographie_edit', array('id' => $photographie->getId()));
        }

        return $this->render('photographie/edit.html.twig', array(
            'photographie' => $photographie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a photographie entity.
     *
     * @Route("/{id}", name="photographie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Photographie $photographie)
    {
        $form = $this->createDeleteForm($photographie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($photographie);
            $em->flush($photographie);
        }

        return $this->redirectToRoute('photographie_index');
    }

    /**
     * Creates a form to delete a photographie entity.
     *
     * @param Photographie $photographie The photographie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Photographie $photographie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('photographie_delete', array('id' => $photographie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
