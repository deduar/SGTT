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
            ->add('fechaInicio')
            ->add('fechaFin')
//            ->add('fechaCreacion')
            ->add('observacion')
            ->add('idtypoexcepcion')
//            ->add('solicitante', EntityType::class, array(
//                'class' => 'S3SandBoxBundle:Empleado'
//                ))
            ->add('idempleado', EntityType::class, array(
                'class' => 'S3SandBoxBundle:Empleado',
                'preferred_choices' => array('value'=>3),
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('u')
                    ->where('u.idsupervisor = '.$options['data']->getIdempleado())
                    ->orWhere('u.id = '.$options['data']->getIdempleado())
                ;},
                'data' => $options['data']->getIdempleado()
                ))
//            ->add('solicitante')
//            ->add('estado')
            ->add('ejecutada')
            ->add('enviada')
            ->add('conformada')
            ->add('idtypoestadoexcepcion')
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
