<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AutresTechniques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Autrestechnique controller.
 *
 * @Route("autrestechniques")
 */
class AutresTechniquesController extends Controller
{
    /**
     * Lists all autresTechnique entities.
     *
     * @Route("/", name="autrestechniques_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $autresTechniques = $em->getRepository('AppBundle:AutresTechniques')->findAll();

        return $this->render('autrestechniques/index.html.twig', array(
            'autresTechniques' => $autresTechniques,
        ));
    }

    /**
     * Creates a new autresTechnique entity.
     *
     * @Route("/new", name="autrestechniques_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $autresTechnique = new Autrestechnique();
        $form = $this->createForm('AppBundle\Form\AutresTechniquesType', $autresTechnique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($autresTechnique);
            $em->flush($autresTechnique);

            return $this->redirectToRoute('autrestechniques_show', array('id' => $autresTechnique->getId()));
        }

        return $this->render('autrestechniques/new.html.twig', array(
            'autresTechnique' => $autresTechnique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a autresTechnique entity.
     *
     * @Route("/{id}", name="autrestechniques_show")
     * @Method("GET")
     */
    public function showAction(AutresTechniques $autresTechnique)
    {
        $deleteForm = $this->createDeleteForm($autresTechnique);

        return $this->render('autrestechniques/show.html.twig', array(
            'autresTechnique' => $autresTechnique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing autresTechnique entity.
     *
     * @Route("/{id}/edit", name="autrestechniques_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AutresTechniques $autresTechnique)
    {
        $deleteForm = $this->createDeleteForm($autresTechnique);
        $editForm = $this->createForm('AppBundle\Form\AutresTechniquesType', $autresTechnique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('autrestechniques_edit', array('id' => $autresTechnique->getId()));
        }

        return $this->render('autrestechniques/edit.html.twig', array(
            'autresTechnique' => $autresTechnique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a autresTechnique entity.
     *
     * @Route("/{id}", name="autrestechniques_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AutresTechniques $autresTechnique)
    {
        $form = $this->createDeleteForm($autresTechnique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($autresTechnique);
            $em->flush($autresTechnique);
        }

        return $this->redirectToRoute('autrestechniques_index');
    }

    /**
     * Creates a form to delete a autresTechnique entity.
     *
     * @param AutresTechniques $autresTechnique The autresTechnique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AutresTechniques $autresTechnique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autrestechniques_delete', array('id' => $autresTechnique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
