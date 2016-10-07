<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pNombre')
            ->add('sNombre', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('pApellido')
            ->add('sApellido', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('tDocumento', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('ci', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('rif', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('sexo', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('idestadocivil', IntegerType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('nacionalidad')
            ->add('idciudadNac')
            ->add('idestadocivil')
            ->add('fechanacimiento', DateType::class, array('format' => 'yyyy-MM-dd'))
            ->add('direccion1', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('direccion2', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('idciudadHab')
            ->add('idtipovivienda')
            ->add('tlfHabitacion', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('tlfMovil', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('tlfEmergencia', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('personaContacto', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
            ->add('email', TextType::class, array(
                'required'    => false,
                'empty_data'  => null))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'deduar\S3SandBoxBundle\Entity\Persona'
        ));
    }
}
