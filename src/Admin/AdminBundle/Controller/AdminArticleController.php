<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TheBlog\BlogBundle\Form\ArticleType;
use TheBlog\BlogBundle\Entity\Article;

class AdminArticleController extends Controller
{
    public function indexAction()
    {
        $oEm    = $this->getDoctrine()->getManager();
        $tArticles          = $oEm->getRepository('TheBlogBlogBundle:Article')->findAll(  );
        return $this->render('AdminAdminBundle:Article:index.html.twig',
                array('articles' => $tArticles)
            );
    }

    public function ajouterAction()
    {
        $oArticle   = new Article();

        $oTheform   = $this->createForm(new ArticleType(), $oArticle);


        $oRequest   = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->handleRequest($oRequest);

            if ( $oTheform->isValid() )
            {
                $em = $this->getDoctrine()->getEntityManager();

                $oArticle->setDate(new \DateTime());

                $em->persist($oArticle);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'La nouvelle Article a bien été ajoutée');

                return $this->redirect($this->generateUrl('admin_admin_homepage'));
            }
        }

        return $this->render('AdminAdminBundle:Article:ajouter.html.twig',
                array('formajout' => $oTheform->createView())
            );
    }

    public function editerAction( $id )
    {
        $em             = $this->getDoctrine()->getManager();
        $oArticle       = $em->getRepository('TheBlogBlogBundle:Article')->find($id);

        $oTheform   = $this->createForm(new ArticleType(), $oArticle);

        $oRequest           = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->handleRequest($oRequest);

            if ( $oTheform->isValid() )
            {
                $oArticle->setDate(new \DateTime());

                $em->persist($oArticle);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'L\'Article a bien été modifié');

                return $this->redirect($this->generateUrl('admin_admin_homepage'));
            }
        }

        return $this->render('AdminAdminBundle:Article:modifier.html.twig',
            array('formajout' => $oTheform->createView(), 'article' => $oArticle)
        );
    }

    public function supprimerAction( $id )
    {
        $em             = $this->getDoctrine()->getManager();
        $oArticle       = $em->getRepository('TheBlogBlogBundle:Article')->find($id);

        $em->remove($oArticle);
        $em->flush();

        $oArticles     = $em->getRepository('TheBlogBlogBundle:Categories')->findAll();

        return $this->render('AdminAdminBundle:Article:index.html.twig', array('articles' => $oArticles) );
    }
}
