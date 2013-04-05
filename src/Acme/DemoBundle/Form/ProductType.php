<?php

namespace Acme\DemoBundle\Form;

use Sylius\Bundle\AssortmentBundle\Form\Type\ProductType as BaseProductType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends BaseProductType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('taxons', 'sylius_taxon_selection');
    }
}
