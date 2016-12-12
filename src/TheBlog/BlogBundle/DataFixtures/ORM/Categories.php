<?php
/**
 * Created by PhpStorm.
 * User: Niaina
 * Date: 28/11/2016
 * Time: 09:38
 */

namespace TheBlog\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TheBlog\BlogBundle\Entity\Article;
use TheBlog\BlogBundle\Entity\Image;


class Categories implements FixtureInterface
{
    public function load(ObjectManager $oManager)
    {
        $tCategories = array(1=>'Categorie Bidon 1', 'Categorie Bidon 2', 'Categorie Bidon 3');

        foreach( $tCategories as $tCategorie  )
        {
            $oCategorie = new \TheBlog\BlogBundle\Entity\Categories();

            $oCategorie->setNom($tCategorie);

            $oManager->persist($oCategorie);
        }

        $oManager->flush();

        $oCat1  = $oManager->getRepository('TheBlogBlogBundle:Categories')->find(1);
        $oCat2  = $oManager->getRepository('TheBlogBlogBundle:Categories')->find(2);
        $oCat3  = $oManager->getRepository('TheBlogBlogBundle:Categories')->find(3);

        $oArticle1  = new Article();
        $oArticle1->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>')
            ->setDate(new \Datetime() )
            ->setCategories($oCat1)
            ->setPublication(true)

            ->setTitre('Praesent dapibusneque id cursus faucioibus tortor neque tiegetas augue');

        $oImage1    = new Image();
        $oImage1->setUrl('images/img1.jpg');

        $oArticle1->setImage( $oImage1 );

        $oManager->persist($oArticle1);

        $oArticle2  = new Article();
        $oArticle2->setAuteur('Admin')
            ->setContenu('<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel ipsum dolor.</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat1)
            ->setTitre('Integer vitae libero ac risus egestas');

        $oImage2    = new Image();
        $oImage2->setUrl('images/img3.jpg');

        $oArticle2->setImage( $oImage2 );

        $oManager->persist($oArticle2);

        $oArticle3  = new Article();
        $oArticle3->setAuteur('Admin')
            ->setContenu('<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilis</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat1)
            ->setTitre('Integer vitae libero risus egestas');

        $oImage3    = new Image();
        $oImage3->setUrl('images/2222.jpg');

        $oArticle3->setImage( $oImage3 );

        $oManager->persist($oArticle3);

        $oArticle4  = new Article();
        $oArticle4->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla. </p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat2)
            ->setTitre('CURSUS FAUCIO');

        $oImage4    = new Image();
        $oImage4->setUrl('images/img2.jpg');

        $oArticle4->setImage( $oImage4 );

        $oManager->persist($oArticle4);

        $oArticle5  = new Article();
        $oArticle5->setAuteur('Admin')
            ->setContenu('<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat2)
            ->setTitre('Aliquam tincidunt mauris eu risus');

        $oManager->persist($oArticle5);

        $oArticle6  = new Article();
        $oArticle6->setAuteur('Admin')
            ->setContenu('<iframe src="//player.vimeo.com/video/78517603" width="220px" height="" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
										<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in.</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat2)
            ->setTitre('Lorem ipsum dolor');

        $oManager->persist($oArticle6);

        $oArticle7  = new Article();
        $oArticle7->setAuteur('Admin')
            ->setContenu('<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat3)
            ->setTitre('Integer vitae libero risus egestas');

        $oImage    = new Image();
        $oImage->setUrl('images/img10.jpg');

        $oArticle7->setImage($oImage);
        $oManager->persist($oArticle7);
        unset($oImage);

        $oArticle8  = new Article();
        $oArticle8->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat3)
            ->setTitre('Praesent dapibusn id cursus');

        $oImage    = new Image();
        $oImage->setUrl('images/img4.jpg');

        $oArticle8->setImage($oImage);
        $oManager->persist($oArticle8);
        unset($oImage);

        $oArticle9  = new Article();
        $oArticle9->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat3)
            ->setTitre('Praesent dapibusneque id cursus faucioibus tortor neque tiegetas augue');

        $oImage    = new Image();
        $oImage->setUrl('images/img11.jpg');

        $oArticle9->setImage($oImage);
        $oManager->persist($oArticle9);
        unset($oImage);

        $oArticle10  = new Article();
        $oArticle10->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat1)
            ->setTitre('Praesent dapibusn id cursus');

        $oImage    = new Image();
        $oImage->setUrl('images/img13.jpg');

        $oArticle10->setImage($oImage);
        $oManager->persist($oArticle10);
        unset($oImage);

        $oArticle11  = new Article();
        $oArticle11->setAuteur('Admin')
            ->setContenu('<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet</p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat1)
            ->setTitre('Integer vitae libero risus egestas');

        $oImage    = new Image();
        $oImage->setUrl('images/img17.jpg');

        $oArticle11->setImage($oImage);
        $oManager->persist($oArticle11);
        unset($oImage);

        $oArticle12  = new Article();
        $oArticle12->setAuteur('Admin')
            ->setContenu('<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>')
            ->setDate(new \Datetime() )
            ->setPublication(true)
            ->setCategories($oCat1)
            ->setTitre('Praesent dapibusneque id cursus faucioibus tortor neque tiegetas augue');

        $oImage    = new Image();
        $oImage->setUrl('images/img16.jpg');

        $oArticle12->setImage($oImage);
        $oManager->persist($oArticle12);
        unset($oImage);

        $oManager->flush();
    }
}