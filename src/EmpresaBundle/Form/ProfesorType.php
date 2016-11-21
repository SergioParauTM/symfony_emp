<?php

namespace EmpresaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfesorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) // al generar el formulario sobre la entidad profesor se nos genera estos metodos
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('departamento')
            ->add('save', SubmitType::class)
            ->add('delete',ResetType::class)
        ;

        //al formulario se nos añade estos  builders que pertenecen a la clase formbuilderInterface que nos construyen el formulario
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmpresaBundle\Entity\Profesor'
        ));
    }

    // se configuran las opciones que se encuentran en entidad en Profesor y las resuelven
}
