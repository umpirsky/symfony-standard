<?php

namespace Acme\DemoBundle\Repository;

use Sylius\Bundle\AssortmentBundle\Entity\CustomizableProductRepository;
use Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface;

class ProductRepository extends CustomizableProductRepository
{
    public function createByTaxonPaginator(TaxonInterface $taxon)
    {
        $queryBuilder = $this->getCollectionQueryBuilder();

        $queryBuilder
            ->innerJoin('product.taxons', 'taxon')
            ->andWhere('taxon = :taxon')
            ->setParameter('taxon', $taxon)
        ;

        return $this->getPaginator($queryBuilder);
    }
}
