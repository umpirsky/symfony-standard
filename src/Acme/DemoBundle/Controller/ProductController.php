<?php

namespace Acme\DemoBundle\Controller;

use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends ResourceController
{
    public function indexByTaxonAction(Request $request, $permalink)
    {
        $taxon = $this
            ->get('sylius.controller.taxon')
            ->findOr404(array('permalink' => $permalink))
        ;

        $paginator = $this
            ->getRepository()
            ->createByTaxonPaginator($taxon)
        ;

        $paginator->setCurrentPage($request->query->get('page', 1));
        $paginator->setMaxPerPage($this->getConfiguration()->getPaginationMaxPerPage());

        return $this->renderResponse('indexByTaxon.html', array(
            'taxon'    => $taxon,
            'products' => $paginator,
        ));
    }
}
