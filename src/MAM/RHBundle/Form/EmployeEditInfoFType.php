<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use MAM\RHBundle\Form\EmployeType;

class EmployeEditInfoFType extends EmployeType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Diplome','text')
            ->add('Formation','text')
            ->add('Fonction','text')
            ->add('Specialite','text')
            ->add('departement','choice', array('choices' => array('DSI' => 'Systeme d\'information', 'DRH' => ' Ressource Humaine','DF' => 'Financière','DC' =>"Commercial",'DQE' =>"Qualité et environnement")))
            //->add('user',new UserType(),array('label' =>'Ajouter un utilisateur:'))
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
