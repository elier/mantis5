<?php

namespace Mantis\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mantis\CoreBundle\Entity\CustomField;
use Mantis\CoreBundle\Form\CustomFieldType;

/**
 * CustomField controller.
 *
 * @Route("/secure/customfield")
 */
class CustomFieldController extends Controller
{

    /**
     * Lists all CustomField entities.
     *
     * @Route("/", name="secure_customfield")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MantisCoreBundle:CustomField')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CustomField entity.
     *
     * @Route("/", name="secure_customfield_create")
     * @Method("POST")
     * @Template("MantisCoreBundle:CustomField:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CustomField();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

                            return $this->redirect($this->generateUrl('secure_customfield'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a CustomField entity.
    *
    * @param CustomField $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CustomField $entity)
    {
        $form = $this->createForm(new CustomFieldType(), $entity, array(
            'action' => $this->generateUrl('secure_customfield_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CustomField entity.
     *
     * @Route("/new", name="secure_customfield_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CustomField();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CustomField entity.
     *
     * @Route("/{id}", name="secure_customfield_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MantisCoreBundle:CustomField')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CustomField entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CustomField entity.
     *
     * @Route("/{id}/edit", name="secure_customfield_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MantisCoreBundle:CustomField')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CustomField entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a CustomField entity.
    *
    * @param CustomField $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CustomField $entity)
    {
        $form = $this->createForm(new CustomFieldType(), $entity, array(
            'action' => $this->generateUrl('secure_customfield_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CustomField entity.
     *
     * @Route("/{id}", name="secure_customfield_update")
     * @Method("PUT")
     * @Template("MantisCoreBundle:CustomField:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MantisCoreBundle:CustomField')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CustomField entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('secure_customfield_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CustomField entity.
     *
     * @Route("/{id}", name="secure_customfield_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MantisCoreBundle:CustomField')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CustomField entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('secure_customfield'));
    }

    /**
     * Creates a form to delete a CustomField entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('secure_customfield_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
