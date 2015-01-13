<?php

namespace Mantis\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomFieldType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('possibleValues')
            ->add('defaultValue')
            ->add('validRegexp')
            ->add('accessLevelR')
            ->add('accessLevelRw')
            ->add('lengthMin')
            ->add('lengthMax')
            ->add('requireReport')
            ->add('requireUpdate')
            ->add('displayReport')
            ->add('displayUpdate')
            ->add('requireResolved')
            ->add('displayResolved')
            ->add('displayClosed')
            ->add('requireClosed')
            ->add('filterBy')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mantis\CoreBundle\Entity\CustomField'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mantis_corebundle_customfield';
    }
}
