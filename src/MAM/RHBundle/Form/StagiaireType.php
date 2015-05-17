<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StagiaireType extends AbstractType
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
            ->add('Tel','text')
            ->add('Etablissement','text')
            ->add('Niveau_scol','choice', array('choices' => array('0' => 'Bac','1' => 'Bac+1','2' => 'Bac+2','3' => 'Bac+3','4' => 'Bac+4','5' => 'Bac+5','6' => 'Bac+6','7' => 'Bac+7',)))
            ->add('Diplome','text')
            ->add('Cv',new CVType())
            ->add('date_deb','date')
            ->add('date_fin','date')
            ->add('duree','choice', array('choices' => array('1' => '1 mois', '2' => '2 mois','3' =>'3 mois','4' =>'4 mois','5' =>'5 mois','6' =>'6 mois','7' =>'7 mois','8' =>'8 mois','9' =>'9 mois','10' =>'10 mois','11' =>'11 mois')))
            ->add('sujet','textarea')
            ->add('employeNormal', 'entity', array(
                'label'    => 'Encadrant :',
                'class'    => 'MAMRHBundle:Employenormal',
                'property' => 'Nom',
                'multiple' => false,
                'expanded' => false))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAM\RHBundle\Entity\Stagiaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_stagiaire';
    }
}
