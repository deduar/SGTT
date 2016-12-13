<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExcepcionSupervisorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('idtypoexcepcion',EntityType::class,
                array('class'=>'S3SandBoxBundle:TypoExcepcion',
                      'label'=>'Tipo de Excepción',
                      'label_attr'=>array('class'=>'col-sm-3'),
                      'attr'=>array('class'=>'col-sm-9')))
            ->add('fechaInicio',DateTimeType::class,
                array('label'=>'Fecha y Hora de Inicio',
                      'label_attr'=>array('class'=>'col-sm-3'),
                      'attr'=>array('class'=>'col-sm-9')))
            ->add('fechaFin',DateTimeType::class,
                array('label'=>'Fecha y Hora Final',
                      'label_attr'=>array('class'=>'col-sm-3'),
                      'attr'=>array('class'=>'col-sm-9')))
            ->add('observacion', TextareaType::class, 
                array('label'=>'Motivo',
                      'label_attr'=>array('class'=>'col-sm-3'),
                      'attr'=>array('class'=>'col-sm-9')))
            ->add('idempleado', EntityType::class,
                array('class'=>'S3SandBoxBundle:Empleado',
                      'label'=>'Empleado',
                      'label_attr'=>array('class'=>'col-sm-3'),
                      'attr'=>array('class'=>'col-sm-9'),
                      'query_builder' => function (EntityRepository $er) use ($options) {
                        return $er->createQueryBuilder('u')
                            ->where('u.idsupervisor = '.$options['data']->getIdempleado())
                            ->orWhere('u.id = '.$options['data']->getIdempleado());
                        },
                        'data' => $options['data']->getIdempleado()))
            ->add('save', SubmitType::class, 
                array('label' => 'Guardar Excepción',
                      'attr'  => array(
                        'class' => 'btn btn-primary col-sm-offset-4 col-sm-2')))
            ->add('cancel', SubmitType::class, 
                array('label' => 'Cancelar Excepción',
                      'attr' => array(                       
                        'class' => 'btn btn-danger col-sm-offset-1 col-sm-2',
                        'formnovalidate'=>'formnovalidate')))
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
