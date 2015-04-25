<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



use MAM\UserBundle\Form\UserType;


class EmployeType extends AbstractType
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
            ->add('cv',new CVType())
            ->add('Num_comptbanq','text')
            ->add('Cnss','text')
            ->add('Cimr','text')
            ->add('Type_contrat','choice', array(
                'choices' => array('CDI' => 'CDI',
                    'CDD' => 'CDD',
                    'TC' =>'temps complet',
                    'TP' =>'temps partiel')))
            ->add('Diplome','text')
            ->add('Formation','text')
            ->add('Fonction','text')
            ->add('Specialite','text')
            ->add('Salaire','text')
            ->add('image',new ImageType())
            ->add('departement', 'entity', array(
                'label'    => 'Departement;',
                'class'    => 'MAMRHBundle:Departement',
                'property' => 'libelle',
                'multiple' => false,
                'expanded' => false))
                //,'choice', array('choices' => array('DSI' => 'Systeme d\'information', 'DRH' => ' Ressource Humaine','DF' => 'Financière','DC' =>"Commercial",'DQE' =>"Qualité et environnement")))

                //,'choice', array('choices' => array('DSI' => 'Systeme d\'information', 'DRH' => ' Ressource Humaine','DF' => 'Financière','DC' =>"Commercial",'DQE' =>"Qualité et environnement")))

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
