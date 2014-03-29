<?php

namespace ICantGo\ConcertBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConcertType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateConcert', 'genemu_jquerydate')
            ->add('artist')
            ->add('hBegin')
            ->add('hEnding')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ICantGo\ConcertBundle\Entity\Concert'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icantgo_concertbundle_concert';
    }
}
