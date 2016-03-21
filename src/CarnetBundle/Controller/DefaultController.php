<?php

namespace CarnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CarnetBundle\Entity\Contact;
use CarnetBundle\Form\Type\AddressFormType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            
            //$em = $this->getDoctrine()->getManager();
            //$contacts = $em->getRepository("CarnetBundle:Contact");
            
            $user = $this->container->get('security.context')->getToken()->getUser();
            $contacts = $user->getContacts();
            
            return $this->render('CarnetBundle:Default:index.html.twig', array(
                'contacts' => $contacts
            ));
        }
        return $this->redirect($this->generateUrl('fos_user_security_login'));
    }
    
    public function addAction(Request $request)
    {
        $contact = new Contact();
        $user = $this->getUser();
        $form = $this->createForm(new AddressFormType, $contact);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $email = $data->getEmail();
            $isEmailRegistered = $this->getDoctrine()->getManager()->getRepository("CarnetBundle:User")->findOneBy( array (
                'email' => $email
            ));
            if(!empty($isEmailRegistered))
                $contact->setState(Contact::STATE_REGISTERED);
            $em = $this->getDoctrine()->getManager();
            //$dispatcher = $this->getDispatcher();
            $contact->setUser($this->getUser());
            //$dispatcher->dispatch(AddressEvent::ADDRESS_ADD_SUCCESS, new FormEvent($form));
            $em->persist($contact);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "Le contact a été ajouté à votre carnet d'adresses.");
            return $this->redirect($this->generateUrl('carnet_homepage'));
        }
        return $this->render('CarnetBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $address = $em->getRepository("CarnetBundle:Contact")->findOneById($id);
        if($address)
            $em->remove($address);
        $em->flush();
        return $this->redirect($this->generateUrl('carnet_homepage'));
    }
    
    
    public function updateAction($id)
    {
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $address = $em->getRepository("CarnetBundle:Contact")->findOneById($id);
        
        $form = $this->createForm(new AddressFormType, $address);
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $em->flush();
                //$this->get('session')->getFlashBag()->add('success', "Le contact a été modifié avec succès.");
                return $this->redirect($this->generateUrl('carnet_homepage'));
            }
        }
        return $this->render('CarnetBundle:Default:update.html.twig', array(
            'form' => $form->createView(),
            'address' => $address
        ));
    }
}
