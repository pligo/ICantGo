<?php

namespace ICantGo\StageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ICantGo\StageBundle\Entity\Stage;
use ICantGo\StageBundle\Form\StageType;

/**
 * Stage controller.
 *
 */
class StageController extends Controller
{

    /**
     * Lists all Stage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ICantGoStageBundle:Stage')->findAll();

        return $this->render('ICantGoStageBundle:Stage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Stage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Stage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stage_show', array('id' => $entity->getId())));
        }

        return $this->render('ICantGoStageBundle:Stage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Stage entity.
    *
    * @param Stage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Stage $entity)
    {
        $form = $this->createForm(new StageType(), $entity, array(
            'action' => $this->generateUrl('stage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Stage entity.
     *
     */
    public function newAction()
    {
        $entity = new Stage();
        $form   = $this->createCreateForm($entity);

        return $this->render('ICantGoStageBundle:Stage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoStageBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ICantGoStageBundle:Stage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Stage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoStageBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ICantGoStageBundle:Stage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Stage entity.
    *
    * @param Stage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Stage $entity)
    {
        $form = $this->createForm(new StageType(), $entity, array(
            'action' => $this->generateUrl('stage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Stage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ICantGoStageBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stage_edit', array('id' => $id)));
        }

        return $this->render('ICantGoStageBundle:Stage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Stage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ICantGoStageBundle:Stage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stage'));
    }

    /**
     * Creates a form to delete a Stage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
