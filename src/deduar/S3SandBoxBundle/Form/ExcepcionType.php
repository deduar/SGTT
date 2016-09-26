<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExcepcionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaSolicitud')
//            ->add('fechaCreacion')
            ->add('motivo')
            ->add('idtypoexcepcion')
//            ->add('solicitante', EntityType::class, array(
//                'class' => 'S3SandBoxBundle:Empleado'
//                ))
            ->add('solicitante', EntityType::class, array(
                'class' => 'S3SandBoxBundle:Empleado',
                'preferred_choices' => array('value'=>3),
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('u')
                    ->where('u.idsupervisor = '.$options['data']->getSolicitante())
                    ->orWhere('u.id = '.$options['data']->getSolicitante())
                ;},
                'data' => $options['data']->getSolicitante()
                ))
//            ->add('solicitante')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'deduar\S3SandBoxBundle\Entity\Excepcion'
        ));
    }
}
