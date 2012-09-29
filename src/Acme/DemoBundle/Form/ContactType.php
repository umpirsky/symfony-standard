<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('postCode', 'text');
        $builder->add('domain', 'text');
        $builder->add('isbn', 'text');
        $builder->add('creditCard', 'text');
        $builder->add('email', 'email');
        $builder->add('message', 'textarea');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Model\Contact',
        ));
    }

    public function getName()
    {
        return 'contact';
    }
}
