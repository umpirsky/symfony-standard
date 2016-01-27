<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ParentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('items', 'collection', [
            'type' => new ChildType(),
            'allow_add' => true,
            'allow_delete' => true,
        ]);
    }

    public function getName()
    {
        return 'app_parent_form_type';
    }
}
