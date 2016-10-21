<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('foto')
            ->add('idestadoempleado')
            ->add('telefono')
            ->add('abreviado')
            ->add('idtiponomina')
            ->add('personajefe')
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
