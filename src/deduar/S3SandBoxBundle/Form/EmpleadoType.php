<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idpersona')
            ->add('ficha')
            ->add('sindicalizado')
            ->add('idcategoria')
            ->add('idcargo')
            ->add('idsupervisor')
            ->add('idareaubicacion')
            ->add('login')
            ->add('idgrupo')
            ->add('foto', IntegerType::class, array('attr'=>array('disabled'=>true)))
            ->add('idestadoempleado')
            ->add('telefono')
            ->add('abreviado')
            ->add('idtiponomina')
            ->add('personajefe')
            ->add('save', SubmitType::class, array(
                    'label' => 'Guardar Cambios',
                    'attr'  => array('class' => 'btn btn-primary col-sm-offset-1 col-sm-2')))
            ->add('cancel', SubmitType::class, array(
                    'label' => 'Cancelar Cambios',
                    'attr'  => array('class' => 'btn btn-danger col-sm-offset-1 col-sm-2')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'deduar\S3SandBoxBundle\Entity\Empleado'
        ));
    }
}
