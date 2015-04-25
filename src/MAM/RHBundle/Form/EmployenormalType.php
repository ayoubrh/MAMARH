<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmployenormalType extends AbstractType
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
            ->add('Type_contrat','choice', array('choices' => array('CDI' => 'CDI', 'CDD' => 'CDD','TC' =>'temps complet','TP' =>'temps partiel')))
            ->add('Diplome','text')
            ->add('Formation','text')
            ->add('Fonction','text')
            ->add('Specialite','text')
            ->add('Date_embauche','date')
            ->add('Salaire','text')
            ->add('image', new ImageType())
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
            'data_class' => 'MAM\RHBundle\Entity\Employenormal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_employenormal';
    }
}
