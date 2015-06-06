<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use MAM\RHBundle\Form\EmployeType;

class EmployeEditInfoBType extends EmployeType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Num_comptbanq','text')
            ->add('Cnss','text')
            ->add('Cimr','text')
            ->add('Type_contrat','choice', array('choices' => array('CDI' => 'CDI', 'CDD' => 'CDD','TC' =>'temps complet','TP' =>'temps partiel')))
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
