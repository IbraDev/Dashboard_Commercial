<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class VenteForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

           $builder->add('datevente','date',array('label'=>'Date'))
               ->add('coupon')
               ->add('cssmobile')
               ->add('tarajimobile')
               ->add('etoile')
               ->add('clelinktop')
               ->add('routeur')
               ->add('coupond')
               ->add('cartesm')
               ->add('Valider',      'submit');

        ;
    }
    

    public function getName()
    {
        return 'form';
    }
}
