<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttestationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Libelle','choice', array('choices' => array(
                'Attestation de travail' => 'Attestation de travail',
                'Attestation de salaire' => 'Attestation de salaire',
                'Attestation de confirmation' => 'Attestation de confirmation',
                'Bulletin de paie' => 'Bulletin de paie',
                'Domiciliation de salaire' => 'Domiciliation de salaire',
                'Bordereau CNSS' => 'Bordereau CNSS'),
                'label'    => 'Demande :',
                'required'  => false,
            ))
            ->add('priorite','choice', array('choices' => array(
                'Base' => 'Base',
                'Moyenne' => 'Moyenne',
                'Elevée'  => 'Elevée'),
                'label'   => 'Priorité :',
                'required'=> false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAM\RHBundle\Entity\Attestation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_attestation';
    }
}
