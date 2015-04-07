<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('status')
            ->add('categ','entity', array('class' => 'SuiviVenteBundle:Categorie','property'=>'Nom'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suivi\SuiviBundle\Entity\Offres'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'suivi_suivibundle_offres';
    }
}
