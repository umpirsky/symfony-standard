<?php

namespace Acme\DemoBundle\Entity;

use Sylius\Bundle\AssortmentBundle\Entity\Product as BaseProduct;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 */
class Product extends BaseProduct
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="taxon_id", referencedColumnName="id")}
     * )
     */
    protected $taxons;

    public function __construct()
    {
        $this->taxons = new ArrayCollection();
    }

    public function getTaxons()
    {
        return $this->taxons;
    }

    public function setTaxons(Collection $taxons)
    {
        $this->taxons = $taxons;
    }
}
