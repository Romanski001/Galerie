<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Illustration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Illustration controller.
 *
 * @Route("illustration")
 */
class IllustrationController extends Controller
{
    /**
     * Lists all illustration entities.
     *
     * @Route("/", name="illustration_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $illustrations = $em->getRepository('AppBundle:Illustration')->findAll();

        return $this->render('illustration/index.html.twig', array(
            'illustrations' => $illustrations,
        ));
    }

    /**
     * Creates a new illustration entity.
     *
     * @Route("/new", name="illustration_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $illustration = new Illustration();
        $form = $this->createForm('AppBundle\Form\IllustrationType', $illustration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($illustration);
            $em->flush($illustration);

            return $this->redirectToRoute('illustration_show', array('id' => $illustration->getId()));
        }

        return $this->render('illustration/new.html.twig', array(
            'illustration' => $illustration,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a illustration entity.
     *
     * @Route("/{id}", name="illustration_show")
     * @Method("GET")
     */
    public function showAction(Illustration $illustration)
    {
        $deleteForm = $this->createDeleteForm($illustration);

        return $this->render('illustration/show.html.twig', array(
            'illustration' => $illustration,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing illustration entity.
     *
     * @Route("/{id}/edit", name="illustration_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Illustration $illustration)
    {
        $deleteForm = $this->createDeleteForm($illustration);
        $editForm = $this->createForm('AppBundle\Form\IllustrationType', $illustration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('illustration_edit', array('id' => $illustration->getId()));
        }

        return $this->render('illustration/edit.html.twig', array(
            'illustration' => $illustration,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a illustration entity.
     *
     * @Route("/{id}", name="illustration_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Illustration $illustration)
    {
        $form = $this->createDeleteForm($illustration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($illustration);
            $em->flush($illustration);
        }

        return $this->redirectToRoute('illustration_index');
    }

    /**
     * Creates a form to delete a illustration entity.
     *
     * @param Illustration $illustration The illustration entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Illustration $illustration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('illustration_delete', array('id' => $illustration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
