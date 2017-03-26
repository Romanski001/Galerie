<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Textile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Textile controller.
 *
 * @Route("textile")
 */
class TextileController extends Controller
{
    /**
     * Lists all textile entities.
     *
     * @Route("/", name="textile_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $textiles = $em->getRepository('AppBundle:Textile')->findAll();

        return $this->render('textile/index.html.twig', array(
            'textiles' => $textiles,
        ));
    }

    /**
     * Creates a new textile entity.
     *
     * @Route("/new", name="textile_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $textile = new Textile();
        $form = $this->createForm('AppBundle\Form\TextileType', $textile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($textile);
            $em->flush($textile);

            return $this->redirectToRoute('textile_show', array('id' => $textile->getId()));
        }

        return $this->render('textile/new.html.twig', array(
            'textile' => $textile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a textile entity.
     *
     * @Route("/{id}", name="textile_show")
     * @Method("GET")
     */
    public function showAction(Textile $textile)
    {
        $deleteForm = $this->createDeleteForm($textile);

        return $this->render('textile/show.html.twig', array(
            'textile' => $textile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing textile entity.
     *
     * @Route("/{id}/edit", name="textile_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Textile $textile)
    {
        $deleteForm = $this->createDeleteForm($textile);
        $editForm = $this->createForm('AppBundle\Form\TextileType', $textile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('textile_edit', array('id' => $textile->getId()));
        }

        return $this->render('textile/edit.html.twig', array(
            'textile' => $textile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a textile entity.
     *
     * @Route("/{id}", name="textile_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Textile $textile)
    {
        $form = $this->createDeleteForm($textile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($textile);
            $em->flush($textile);
        }

        return $this->redirectToRoute('textile_index');
    }

    /**
     * Creates a form to delete a textile entity.
     *
     * @param Textile $textile The textile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Textile $textile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('textile_delete', array('id' => $textile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
