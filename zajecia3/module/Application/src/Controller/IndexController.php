<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Data;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function __construct(private Data $data)
    {
    }
    public function indexAction()
    {
        return new ViewModel();
    }

    public function dataAction()
    {
        $data = new Data();

        return ['dzis' => $this->data->dzisiaj()];
    }
}
