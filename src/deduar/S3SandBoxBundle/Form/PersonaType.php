<?php

namespace deduar\S3SandBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pNombre', TextType::class, array(
                'label'=> 'Primer Nombre',
                'required'    => false,
                'empty_data'  => null))
            ->add('sNombre', TextType::class, array(
                'label'=> 'Segundo Nombre',
                'required'    => false,
                'empty_data'  => null))
            ->add('pApellido', TextType::class, array(
                'label'=> 'Primer Apellido',
                'required'    => false,
                'empty_data'  => null))
            ->add('sApellido', TextType::class, array(
                'label'=> 'Segundo Apellido',
                'required'    => false,
                'empty_data'  => null))
            ->add('tDocumento', TextType::class, array(
                'label'=> 'Tipo de Documento',
                'required'    => false,
                'empty_data'  => null))
            ->add('ci', TextType::class, array(
                'label'=> 'Cédula Identidad',
                'required'    => false,
                'empty_data'  => null))
            ->add('rif', TextType::class, array(
                'label'=> 'RIF',
                'required'    => false,
                'empty_data'  => null))
            ->add('sexo', TextType::class, array(
                'label'=> 'Sexo',
                'required'    => false,
                'empty_data'  => null))
            ->add('idestadocivil')
            ->add('nacionalidad',ChoiceType::class, array(
                'label'=> 'Nacionalidad',
                'required'    => false,
                'empty_data'  => null,
                'choices'=>array(
                    'Venezolano'=>'V',
                    'Extranjero'=>'E',
                    'Nacionalizado'=>'N'
                    )))
            ->add('idciudadNac')
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
            ->add('email', EmailType::class, array(
                'required'    => false,
                'empty_data'  => null))
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
            'data_class' => 'deduar\S3SandBoxBundle\Entity\Persona'
        ));
    }
}
