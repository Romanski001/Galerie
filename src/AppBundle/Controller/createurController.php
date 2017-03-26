<?php

namespace AppBundle\Controller;

use AppBundle\Entity\createur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Createur controller.
 *
 * @Route("createur")
 */
class createurController extends Controller
{
    /**
     * Lists all createur entities.
     *
     * @Route("/", name="createur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $createurs = $em->getRepository('AppBundle:createur')->findAll();

        return $this->render('createur/index.html.twig', array(
            'createurs' => $createurs,
        ));
    }

    /**
     * Creates a new createur entity.
     *
     * @Route("/new", name="createur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $createur = new Createur();
        $form = $this->createForm('AppBundle\Form\createurType', $createur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($createur);
            $em->flush($createur);

            return $this->redirectToRoute('createur_show', array('id' => $createur->getId()));
        }

        return $this->render('createur/new.html.twig', array(
            'createur' => $createur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a createur entity.
     *
     * @Route("/{id}", name="createur_show")
     * @Method("GET")
     */
    public function showAction(createur $createur)
    {
        $deleteForm = $this->createDeleteForm($createur);

        return $this->render('createur/show.html.twig', array(
            'createur' => $createur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing createur entity.
     *
     * @Route("/{id}/edit", name="createur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, createur $createur)
    {
        $deleteForm = $this->createDeleteForm($createur);
        $editForm = $this->createForm('AppBundle\Form\createurType', $createur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('createur_edit', array('id' => $createur->getId()));
        }

        return $this->render('createur/edit.html.twig', array(
            'createur' => $createur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a createur entity.
     *
     * @Route("/{id}", name="createur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, createur $createur)
    {
        $form = $this->createDeleteForm($createur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($createur);
            $em->flush($createur);
        }

        return $this->redirectToRoute('createur_index');
    }

    /**
     * Creates a form to delete a createur entity.
     *
     * @param createur $createur The createur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(createur $createur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('createur_delete', array('id' => $createur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
