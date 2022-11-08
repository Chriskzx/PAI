<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Liczby;
use Application\Model\Miesiace;
use Application\Model\Data;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function __construct(private Data $data, private Miesiace $miesiace, private Liczby $liczby)
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

    public function miesiaceAction()
    {
        $miesiace = new Miesiace();
        return ['miesiace' => $miesiace->pobierzWszystkie()];
    }

    public function liczbyAction()
    {
        $generator = new Liczby();
        $liczby = $generator ->  generuj();
        return ['parzyste' => $liczby[0],
                'nieparzyste' => $liczby[1],
    ];
    }
}
