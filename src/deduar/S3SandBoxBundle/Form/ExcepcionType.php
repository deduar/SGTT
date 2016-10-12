<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ExcepcionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idtypoexcepcion')
            ->add('fechaInicio')
            ->add('fechaFin')
            ->add('observacion')
            ->add('idempleado', EntityType::class, array(
                'class' => 'S3SandBoxBundle:Empleado',
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('u')
                    ->where('u.idsupervisor = '.$options['data']->getIdempleado())
                    ->orWhere('u.id = '.$options['data']->getIdempleado())
                ;},
                'data' => $options['data']->getIdempleado()
                ))
            ->add('estado', ChoiceType::class, array(
                    'choices'=>array(
                            'Creada' => 'Creada',
                            'Por Confirma' => 'Por Confirmar',
                            'Aprobada' => 'Aprobada',
                            'Negada' => 'Negada'
                        )
                ))
            //->add('fechaCreacion')
            ->add('ejecutada')
            ->add('enviada')
            ->add('conformada')
            ->add('remunerada')
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
