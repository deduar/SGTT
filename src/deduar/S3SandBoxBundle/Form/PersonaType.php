<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('sNombre')
            ->add('pApellido')
            ->add('sApellido')
            ->add('tDocumento')
            ->add('ci')
            ->add('rif')
            ->add('sexo')
            ->add('idestadocivil')
            ->add('nacionalidad')
            ->add('idciudadNac')
            ->add('idestadocivil')
            ->add('fechanacimiento', DateType::class, array('format' => 'yyyy-MM-dd'))
            ->add('direccion1')
            ->add('direccion2')
            ->add('idciudadHab')
            ->add('idtipovivienda')
            ->add('tlfHabitacion')
            ->add('tlfMovil')
            ->add('tlfEmergencia')
            ->add('personaContacto')
            ->add('email')
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
