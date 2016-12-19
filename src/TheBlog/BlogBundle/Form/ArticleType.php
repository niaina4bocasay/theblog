<?php

namespace TheBlog\BlogBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TheBlog\BlogBundle\Form\ImageType;
use TheBlog\BlogBundle\Form\CategoriesType;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('auteur')
            ->add('contenu', 'textarea', array('attr' => array('class' => 'tinymce'), 'required' => false))
            ->add('publication')->add('image', new ImageType() )
            ->add('categories', 'entity', array('class' => 'TheBlogBlogBundle:Categories','property' => 'nom', 'multiple' => false))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TheBlog\BlogBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'theblog_blogbundle_article';
    }


}
