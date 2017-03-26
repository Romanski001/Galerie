<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Joaillerie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Joaillerie controller.
 *
 * @Route("joaillerie")
 */
class JoaillerieController extends Controller
{
    /**
     * Lists all joaillerie entities.
     *
     * @Route("/", name="joaillerie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $joailleries = $em->getRepository('AppBundle:Joaillerie')->findAll();

        return $this->render('joaillerie/index.html.twig', array(
            'joailleries' => $joailleries,
        ));
    }

    /**
     * Creates a new joaillerie entity.
     *
     * @Route("/new", name="joaillerie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $joaillerie = new Joaillerie();
        $form = $this->createForm('AppBundle\Form\JoaillerieType', $joaillerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($joaillerie);
            $em->flush($joaillerie);

            return $this->redirectToRoute('joaillerie_show', array('id' => $joaillerie->getId()));
        }

        return $this->render('joaillerie/new.html.twig', array(
            'joaillerie' => $joaillerie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a joaillerie entity.
     *
     * @Route("/{id}", name="joaillerie_show")
     * @Method("GET")
     */
    public function showAction(Joaillerie $joaillerie)
    {
        $deleteForm = $this->createDeleteForm($joaillerie);

        return $this->render('joaillerie/show.html.twig', array(
            'joaillerie' => $joaillerie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing joaillerie entity.
     *
     * @Route("/{id}/edit", name="joaillerie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Joaillerie $joaillerie)
    {
        $deleteForm = $this->createDeleteForm($joaillerie);
        $editForm = $this->createForm('AppBundle\Form\JoaillerieType', $joaillerie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('joaillerie_edit', array('id' => $joaillerie->getId()));
        }

        return $this->render('joaillerie/edit.html.twig', array(
            'joaillerie' => $joaillerie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a joaillerie entity.
     *
     * @Route("/{id}", name="joaillerie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Joaillerie $joaillerie)
    {
        $form = $this->createDeleteForm($joaillerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($joaillerie);
            $em->flush($joaillerie);
        }

        return $this->redirectToRoute('joaillerie_index');
    }

    /**
     * Creates a form to delete a joaillerie entity.
     *
     * @param Joaillerie $joaillerie The joaillerie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Joaillerie $joaillerie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('joaillerie_delete', array('id' => $joaillerie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
