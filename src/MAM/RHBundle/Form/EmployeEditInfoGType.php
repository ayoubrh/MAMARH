<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use MAM\RHBundle\Form\EmployeType;

class EmployeEditInfoGType extends EmployeType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CIN','text')
            ->add('Nom','text')
            ->add('Prenom','text')
            ->add('Adresse','textarea')
            ->add('email','email')
            ->add('Tel','text')
            ->add('matricule','text')
            ->add('cv',new CVType())
            ->add('image', new ImageType())
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAM\RHBundle\Entity\Employe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_employe';
    }
}
