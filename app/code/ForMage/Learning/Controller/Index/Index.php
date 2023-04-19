<?php

namespace ForMage\Learning\Controller\Index;

use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Api\SizeInterface;
//use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    protected $size;
    protected $color;
    protected $pageFactory;

    public function __construct(
        SizeInterface $size,
        ColorInterface $color,
        PageFactory $pageFactory
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        echo "My shirt is {$this->color->getColor()} and its size is {$this->size->getSize()}";

        return $this->pageFactory->create();
    }
}
