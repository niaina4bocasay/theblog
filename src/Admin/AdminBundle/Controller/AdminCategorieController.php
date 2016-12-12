<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TheBlog\BlogBundle\Entity\Categories;
use TheBlog\BlogBundle\Form\CategoriesType;

class AdminCategorieController extends Controller
{
    public function indexAction()
    {
        $oEm            = $this->getDoctrine()->getManager();
        $tCategorie     = $oEm->getRepository('TheBlogBlogBundle:Categories')->findAll(  );
        return $this->render('AdminAdminBundle:Categorie:index.html.twig',
            array('categories' => $tCategorie)
        );
        return $this->render('AdminAdminBundle:Categorie:index.html.twig');
    }

    public function ajouterAction()
    {
        $oCategorie   = new Categories();

        $oTheform   = $this->createForm(new CategoriesType(), $oCategorie);

        $oRequest           = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->handleRequest($oRequest);

            if ( $oTheform->isValid() )
            {
                $em             = $this->getDoctrine()->getManager();

                $em->persist($oCategorie);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'La nouvelle catégorie a bien été enregistrée');

                return $this->redirect($this->generateUrl('admin_admin_categorie'));
            }
        }

        return $this->render('AdminAdminBundle:Categorie:ajouter.html.twig',
            array('formajout' => $oTheform->createView())
        );
    }


    public function editerAction( $id )
    {
        $em             = $this->getDoctrine()->getManager();
        $oCategorie     = $em->getRepository('TheBlogBlogBundle:Categories')->find($id);

        $oTheform   = $this->createForm(new CategoriesType(), $oCategorie);

        $oRequest           = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->handleRequest($oRequest);

            if ( $oTheform->isValid() )
            {


                $em->persist($oCategorie);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'La nouvelle catégorie a bien été modifiée');

                return $this->redirect($this->generateUrl('admin_admin_categorie'));
            }
        }

        return $this->render('AdminAdminBundle:Categorie:modifier.html.twig',
            array('formajout' => $oTheform->createView(), 'categorie' => $oCategorie)
        );
    }

    public function supprimerAction( $id )
    {
        $em             = $this->getDoctrine()->getManager();
        $oCategorie     = $em->getRepository('TheBlogBlogBundle:Categories')->find($id);

        $em->remove($oCategorie);
        $em->flush();

        $oCategories     = $em->getRepository('TheBlogBlogBundle:Categories')->findAll();

        return $this->render('AdminAdminBundle:Categorie:index.html.twig', array('categories' => $oCategories) );
    }
}
