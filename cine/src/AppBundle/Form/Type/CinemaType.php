<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 10/01/2018
 * Time: 14:06
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CinemaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder->add('nom');
        $builder->add('adresse');
        $builder->add('accessibilite');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
        $resolver->setDefaults([
           'data_class' => 'AppBundle\Entity\Cinema',
            'csrf_protection' => false
        ]);
    }
}