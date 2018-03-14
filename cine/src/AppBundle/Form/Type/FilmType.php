<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 10/01/2018
 * Time: 15:50
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder->add('titre');
        $builder->add('resume');
        $builder->add('duree');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Film',
            'csrf_protection' => false
        ]);
    }

}