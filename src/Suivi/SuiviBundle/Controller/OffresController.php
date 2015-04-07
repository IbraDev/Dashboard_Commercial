<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Suivi\SuiviBundle\Entity\Offres;
use Suivi\SuiviBundle\Form\OffresType;

/**
 * Offres controller.
 *
 * @Route("/offres")
 */
class OffresController extends Controller
{

    /**
     * Lists all Offres entities.
     *
     * @Route("/", name="offres")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuiviVenteBundle:Offres')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Offres entity.
     *
     * @Route("/", name="offres_create")
     * @Method("POST")
     * @Template("SuiviVenteBundle:Offres:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Offres();
       $form = $this->createForm(new OffresType(), $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offres_show', array('id' => $entity->getId())));
        }

        return $this->render('SuiviVenteBundle:Offres:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'action'=>"Ajouter"
        ));
    }

    /**
     * Creates a form to create a Offres entity.
     *
     * @param Offres $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Offres $entity)
    {
       $form = $this->createForm(new OffresType(), $entity);
        $form->add('submit', 'submit', array('label' => 'Ajouter'));
      
        return $form;
    }

    /**
     * Displays a form to create a new Offres entity.
     *
     * @Route("/new", name="offres_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Offres();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Offres entity.
     *
     * @Route("/{id}", name="offres_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuiviVenteBundle:Offres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Offres entity.
     *
     * @Route("/{id}/edit", name="offres_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Offres $offres)
   {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new OffresType(), $offres);


        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $offres = $form->getData();
                $em->persist($offres);
                $em->flush();

                return $this->redirect($this->generateUrl('offres_show', array('id' => $offres->getId())));
            }
        }

        return $this->render('SuiviVenteBundle:Offres:edit.html.twig', array(
                    'categorie' => $offres,
                    'form' => $form->createView(),
                    'action' => "Editer"
        ));
    }

    

    /**
    * Creates a form to edit a Offres entity.
    *
    * @param Offres $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Offres $entity)
    {
        $form = $this->createForm(new OffresType(), $entity, array(
            'action' => $this->generateUrl('offres_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Offres entity.
     *
     * @Route("/{id}", name="offres_update")
     * @Method("PUT")
     * @Template("SuiviVenteBundle:Offres:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuiviVenteBundle:Offres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('offres_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Offres entity.
     *
     * @Route("/{id}", name="offres_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuiviVenteBundle:Offres')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offres entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('offres'));
    }

    /**
     * Creates a form to delete a Offres entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offres_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
