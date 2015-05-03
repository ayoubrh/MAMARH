<?php

namespace MAM\RHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SuiviType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_D_tache','datetime')
            ->add('date_F_tache','datetime')
            ->add('tache','text')
            ->add('Descriptif','textarea')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAM\RHBundle\Entity\Suivi'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mam_rhbundle_suivi';
    }
}
