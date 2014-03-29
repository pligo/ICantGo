<?php

namespace ICantGo\ConcertBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ICantGo\ConcertBundle\Entity\Concert;
use ICantGo\ConcertBundle\Form\ConcertType;

/**
 * Concert controller.
 *
 */
class ConcertController extends Controller
{

    /**
     * Lists all Concert entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ICantGoConcertBundle:Concert')->findAll();

        return $this->render('ICantGoConcertBundle:Concert:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Concert entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Concert();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concert_show', array('id' => $entity->getId())));
        }

        return $this->render('ICantGoConcertBundle:Concert:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Concert entity.
    *
    * @param Concert $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Concert $entity)
    {
        $form = $this->createForm(new ConcertType(), $entity, array(
            'action' => $this->generateUrl('concert_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Concert entity.
     *
     */
    public function newAction()
    {
        $entity = new Concert();
        $form   = $this->createCreateForm($entity);

        return $this->render('ICantGoConcertBundle:Concert:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Concert entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoConcertBundle:Concert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concert entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ICantGoConcertBundle:Concert:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Concert entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoConcertBundle:Concert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concert entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ICantGoConcertBundle:Concert:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Concert entity.
    *
    * @param Concert $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Concert $entity)
    {
        $form = $this->createForm(new ConcertType(), $entity, array(
            'action' => $this->generateUrl('concert_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Concert entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoConcertBundle:Concert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concert entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('concert_edit', array('id' => $id)));
        }

        return $this->render('ICantGoConcertBundle:Concert:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Concert entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ICantGoConcertBundle:Concert')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Concert entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('concert'));
    }

    /**
     * Creates a form to delete a Concert entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('concert_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
