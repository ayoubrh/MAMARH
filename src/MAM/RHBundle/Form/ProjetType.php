<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Libelle','text')
            ->add('Descriptif','textarea')
            ->add('Duree_estime','integer')
            ->add('Date_deb','date')
            ->add('help', 'entity', array(
                'class'    => 'MAMRHBundle:Employenormal',
                'property' => 'Nom',
                'required'  => false,
                'multiple' => false,))
            ->add('employeNormals', 'entity', array(
                'class'    => 'MAMRHBundle:Employenormal',
                'property' => 'Nom',
                'required'  => false,
                'multiple' => true,))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAM\RHBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_projet';
    }
}
